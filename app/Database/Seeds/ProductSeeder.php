<?php namespace App\Database\Seeds;

class ProductSeeder extends \CodeIgniter\Database\Seeder {
    
    public function run() {
        
        $this->db->table('products')->insert([
            'name' => 'Produtinho',
            'observation' => 'Test'
        ]);
    }
}