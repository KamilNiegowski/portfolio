<?php
    
    namespace Tests\Feature;
    
    use App\Models\Currency;
    use GuzzleHttp\Client;
    use Illuminate\Http\Response;
    use Mockery;
    use Tests\TestCase;
    
    
    class CurrencyApiServiceTest extends TestCase
    {
        public function setUp(): void
        {
            parent::setUp();
            Currency::truncate();
        }
        
        public function test_connect_to_api_check_response(): void
        {
            $client = new Client();
            $response = $client->get( 'https://api.nbp.pl/api/exchangerates/tables/a' );
            $this->assertEquals( Response::HTTP_OK, $response->getStatusCode() );
            
            $contents = $response->getBody()->getContents();
            $this->assertIsString( $contents );
            
            $data = json_decode( $contents, true );
            $this->assertNotNull( $data );
            $this->assertIsArray( $data );
        }
        
        public function testAddCurrencyToDb(): void
        {
            // Tworzy mocka dla metody ConnectApi w kontrolerze
            $mockedApi = Mockery::mock( 'App\Http\Controllers\ConnectApi[ConnectApi]' );
            $mockedApi->shouldReceive( 'ConnectApi' )->andReturn( [
                [ 'code' => 'EUR', 'currency' => 'euro', 'mid' => '4.5' ]
            ] );
            
            // Tworzy mocka dla metody dodawania do bazy danych
            $mockedController = Mockery::mock( 'App\Http\Controllers\CurrencyController' )->makePartial();
            $mockedController->shouldReceive( 'AddCurrencyToDB' )->andReturn( false );
            
            // Zastępuje oryginalną instancję kontrolera mockiem
            $this->app->instance( 'App\Http\Controllers\CurrencyController', $mockedController );
            
            // Wywołuje metodę ViewCurrency z kontrolera z daną walutą
            $response = $this->get( '/kursy-walut' );
            
            // Sprawdza, czy strona wyświetla odpowiednie dane (nie powinna dodać do bazy danych)
            $response->assertStatus( 200 );
            $this->assertDatabaseMissing( 'currencies', [
                'name' => 'euro',
                'currency_code' => 'EUR',
            ] );
        }
        
        
        public function testShowCurrencyFromDb(): void
        {
            // Tworzy mocka dla metody dodawania do bazy danych
            $mockedController = Mockery::mock( 'App\Http\Controllers\CurrencyController' )->makePartial();
            $mockedController->shouldReceive( 'AddCurrencyToDB' )->andReturn( false );
            $this->app->instance( 'App\Http\Controllers\CurrencyController', $mockedController );
            
            // Tworzy kurs waluty w bazie danych
            $currency = Currency::create( [
                'name' => 'Euro',
                'currency_code' => 'EUR',
                'exchange_rate' => '4.5'
            ] );
            
            $response = $this->get( '/kursy-walut' );
            $response->assertStatus( 200 )->assertSeeText( 'Euro' );
        }
        
    }