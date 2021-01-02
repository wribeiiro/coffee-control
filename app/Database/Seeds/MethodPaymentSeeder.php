<?php namespace App\Database\Seeds;

class MethodPaymentSeeder extends \CodeIgniter\Database\Seeder {
    
    public function run() {
        
        $this->db->table('methods_payment')->insert([
            'name' => 'A VISTINHA',
            'observation' => 'Test'
        ]);
    }
}