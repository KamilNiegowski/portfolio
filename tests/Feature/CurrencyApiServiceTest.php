<?php
    
    namespace Tests\Feature;
    
    use App\Http\Controllers\CurrencyController;
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
        
        public function testAddCurrencyToDB(): void
        {
            // Tworzy mocka dla metody ConnectApi w kontrolerze
            $mockedApi = Mockery::mock( 'App\Http\Controllers\CurrencyController[ConnectApi]' );
            $mockedApi->shouldReceive( 'ConnectApi' )->andReturn( [
                [ 'code' => 'EUR', 'mid' => '4.5' ]
            ] );
            
            // Wywołuje metodę AddCurrencyToDB z kontrolera
            $controller = new CurrencyController();
            $controller->AddCurrencyToDB();
            
            // Sprawdza, czy kurs waluty został dodany do bazy danych
            $this->assertDatabaseHas( 'currencies', [
                'name' => 'euro',
                'currency_code' => 'EUR',
            ] );
        }
        
        public function testShowCurrencyFromDB(): void
        {
            // Tworzy kurs waluty w bazie danych
            $currency = Currency::create( [
                'name' => 'Euro',
                'currency_code' => 'EUR',
                'exchange_rate' => '4.5'
            ] );
            
            // Pobiera stronę internetową
            $response = $this->get( '/kursy-walut' );
            
            // Sprawdza, czy strona internetowa wyświetla kurs waluty pobrany z bazy danych
            $response->assertStatus( 200 )->assertSeeText( 'Euro' );
        }
        
    }