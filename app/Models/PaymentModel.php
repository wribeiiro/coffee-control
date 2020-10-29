<?php 

namespace App\Models;
use CodeIgniter\Model;

class PaymentModel extends Model {

    protected $table = 'payments';

    public function getPayments() {
        $sql = "SELECT payments.*, 
        clients.name as client_name, 
        products.name as product_name, 
        products.price as price,
        methods_payment.name as payment_name,
        DATE_FORMAT(payments.expire_in, '%d/%m/%Y') as expire_in
        FROM payments
        INNER JOIN clients
            ON clients.id = payments.client_id
        INNER JOIN products 
            ON products.id = payments.product_id
        INNER JOIN methods_payment
            ON methods_payment.id = payments.method_payment_id
        ORDER BY payments.id DESC";

        $query = $this->db->query($sql);

        return $query->getResult();
    }
}