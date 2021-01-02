<?php namespace App\Database\Seeds;

class ClientSeeder extends \CodeIgniter\Database\Seeder {
    
    public function run() {
        
        $this->db->table('clients')->insert([
            'name' => 'darth',
            'cpf_cnpj' => 999999999,
            'uf_city'    => 'MAFRA-SC',
            'phone_number' => 12345678910,
        ]);
    }
}