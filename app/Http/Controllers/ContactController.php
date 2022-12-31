<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ContactController extends Controller
    {
        public function submit( Request $request ): array
        {
            $request->validate( [
                'name' => 'required',
                'email' => [ 'required', 'email' ],
                'message' => 'required',

            ] );

            //Send email
            return [ 'success' => true ];
        }
    }
