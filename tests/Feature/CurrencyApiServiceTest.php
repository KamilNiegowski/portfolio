<?php
    
    namespace Tests\Feature;
    
    use App\Models\Currency;
    use Tests\TestCase;

    class CurrencyApiServiceTest extends TestCase
    {
        public function test_connect_to_API(): void
        {
        
        }
        
        public function test_put_the_data_in_database_and_show(): void
        {
            $currency = Currency::create( [
                'name' => 'euro',
                'currency_code' => 'EUR',
                'exchange_rate' => '000'
            
            ] );
            
            $response = $this->get( '/kursy-walut' );
            
            $response->assertStatus( 200 )->assertSeeText( 'THB' );
        }
    }
