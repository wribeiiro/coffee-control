<?php

namespace App\Validations;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Response;

class AuthenticationValidation {

	private static $rules_auth = [
        'email' => [
            'rules' => 'required|valid_email|max_length[50]'
        ],
        'password' => [ 
            'rules' => 'required|string'
        ],
    ];

    public static function makeValidation(IncomingRequest $request):? array {

        $validation = \Config\Services::validation()->setRules(self::$rules_auth);

        if (!$validation->withRequest($request)->run()) {
            return [
                'code'    => Response::HTTP_BAD_REQUEST,
                'message' => self::treatValidationErrors(), 
                'data'    => []
            ];
        } 

        return null;
    }
    
    public static function treatValidationErrors(): string {
        return implode(" ", array_values(\Config\Services::validation()->getErrors()));
    }
}