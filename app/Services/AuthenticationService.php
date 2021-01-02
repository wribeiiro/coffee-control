<?php

namespace App\Services;

use CodeIgniter\HTTP\IncomingRequest;
use App\Validations\AuthenticationValidation;

class AuthenticationService {

    const MY_EMAIL    = 'welleh10@gmail.com';
    const MY_PASSWORD = 'xbox360';

    public function auth(IncomingRequest $request): array {
        
        $valid = (new AuthenticationValidation())->makeValidation($request);

        if ($valid !== null) {
            return $valid;
        }

        $email = $request->getPost('email', FILTER_SANITIZE_EMAIL);
        $password = $request->getPost('password', FILTER_SANITIZE_STRING);

        if ($email === self::MY_EMAIL && $password === self::MY_PASSWORD) {

            return [
                'id'         => 1,
                'firstname'  => 'Wellisson',
                'email'      => 'welleh10@gmail.com',
                'isLoggedIn' => true
            ];

        }

        return [];
    }
}