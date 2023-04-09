<?php
    
    namespace App\Http\Controllers;
    
    use GuzzleHttp\Client;
    
    class ConnectApi extends Controller
    {
        public static function ConnectApi( $api_url )
        {
            $client = new Client();
            
            $response = $client->request( 'Get', $api_url, [
                'query' => [
                    'format' => 'json',
                ],
            ] );
            
            $data = json_decode( $response->getBody(), true );
            return $data[ 0 ][ 'rates' ];
        }
    }
