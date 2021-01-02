<?php namespace App\Database\Seeds;

class PaymentSeeder extends \CodeIgniter\Database\Seeder {
    
    public function run() {
        
        $this->db->table('payments')->insert([
            'client_id'     => 1,
            'product_id'    => 1,
            'method_payment_id'    => 1,
            'price'         => 50,
            'link'          => 'https://mpago.la/2qDJ3JJ',
            'status'        => 'paid',
            'expire_in'     => '2025-10-20',
            'observation'   => ''
        ]);
    }
}