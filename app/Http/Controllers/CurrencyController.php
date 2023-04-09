<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Currency;
    
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
            $rates = ConnectApi::ConnectApi( 'https://api.nbp.pl/api/exchangerates/tables/a' );
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
    }
