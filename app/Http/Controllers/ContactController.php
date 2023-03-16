<?php

    namespace App\Http\Controllers;

    use App\Mail\ContactMail;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class ContactController extends Controller
    {
        public function submit( Request $request ): array
        {
            $validate = $request->validate( [
                'name' => 'required',
                'email' => [ 'required', 'email' ],
                'message' => 'required',

            ] );


            Mail::to( 'kamil.niegowski01@gmail.com' )
                ->send( new ContactMail( $validate[ 'name' ], $validate[ 'email' ], $validate[ 'message' ] ) );
            return [ 'success' => true ];
        }
    }
