<?php 

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\Response;
use App\Services\AuthenticationService;

class Authentication extends BaseController {
    
    public function __construct() {
        $this->data['complement'] = 'Login';
    }

	public function index() { 
        echo view('users/auth', $this->data);
    }

    public function login() {
        
        $this->data['validation'] = 'Invalid Credentials';

        $userData = (new AuthenticationService())->auth($this->request);

        if (count($userData) && !isset($userData['code'])) {
            session()->set($userData);
            return redirect()->to(base_url('dashboard'));
        }

        if (count($userData) && isset($userData['code'])) {
            $this->data['validation'] = $userData['message'];
        }

        echo view('users/auth', $this->data);
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url()); 
	}
}