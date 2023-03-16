<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Currency;
    use GuzzleHttp\Client;

    class CurrencyController extends Controller
    {
        public function ViewCurrency( Currency $currency )
        {
            $this->AddCurrencyToDB();
            $currencies = Currency::all();
            return view( 'components.currency.currency', [ 'currencies' => $currencies ] );
        }
        
        public function AddCurrencyToDB()
        {
            $rates = $this->ConnectApi();
            //Wykonywane dla każdego kursu waluty
            foreach ( $rates as $rate ) {
                $currency = Currency::where( 'currency_code', $rate[ 'code' ] )->first();
                
                if ( $currency === null ) {
                    Currency::create( [
                        'name' => $rate[ 'currency' ],
                        'currency_code' => $rate[ 'code' ],
                        'exchange_rate' => $rate[ 'mid' ],
                    ] );
                } else {
                    $currency->exchange_rate = $rate[ 'mid' ];
                    $currency->save();
                }
            }
            return $currency;
        }
        
        public function ConnectApi()
        {
            //Adres URL do API NBP
            $api_url = 'https://api.nbp.pl/api/exchangerates/tables/a';
            
            //Obiekt klienta Guzzle
            $client = new Client();
            
            //Zapytanie Get do Api
            $response = $client->request( 'Get', $api_url, [
                'query' => [
                    'format' => 'json',
                ],
            ] );
            
            //pobranie odpowiedzi z Api i zamiana na tablice php
            $data = json_decode( $response->getBody(), true );
            return $data[ 0 ][ 'rates' ];
        }
    }
