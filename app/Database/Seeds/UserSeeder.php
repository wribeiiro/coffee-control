<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder {
    
    public function run() {
        
        $this->db->table('users')->insert([
            'username' => 'darth',
            'password' => password_hash('123', PASSWORD_DEFAULT),
            'email'    => 'darth@theempire.com',
            'first_name' => 'darth',
            'last_name' => 'darth'
        ]);
        
    }
}