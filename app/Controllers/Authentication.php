<?php 

namespace App\Controllers;
use App\Models\UsersModel;

class Authentication extends BaseController {
    
    protected $users_model;
    protected array $rules = [
        'login'    => 'required|valid_email', 
        'password' => 'required'
    ];

    public function __construct() { 
        $this->data['complement'] = 'Login';
        
        //$this->users_model = new UsersModel();
    }

	public function index() { 
        echo view('users/auth', $this->data);
    }

    public function login() {
        if (!$this->validate($this->rules)) {
            $this->data['validation'] = $this->validator;
        } else {

            $login    = $this->request->getPost("login", FILTER_SANITIZE_EMAIL);
            $password = $this->request->getPost("password", FILTER_SANITIZE_STRING);

            //$userData = $this->users_model->getUser($login, md5($password));

            if ($login === 'welleh10@gmail.com' && $password === 'xbox360') {

                session()->set([
                    'id'         => 1,
                    'firstname'  => 'Wellisson',
                    'email'      => 'welleh10@gmail.com',
                    'isLoggedIn' => true
                ]);
    
                return redirect()->to(base_url('dashboard'));
            } else {
                $this->data['validation'] = 'Invalid Credentials';
            }
        }
        
        echo view('users/auth', $this->data);
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url()); 
	}
}