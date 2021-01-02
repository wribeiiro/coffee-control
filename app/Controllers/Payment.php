<?php 

namespace App\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\ClientRepository;
use App\Repositories\PaymentRepository;

class Payment extends BaseController {
    
    private $payment_repository;
    private $product_repository;
    private $client_repository;

    public function __construct() { 
        $this->payment_repository = new PaymentRepository();
        $this->client_repository  = new ClientRepository();
        $this->product_repository = new ProductRepository();
        
        $this->data['complement']  = 'Payments';
    }

	public function index() {
        $this->data['clients']  = $this->client_repository->getClients();
        $this->data['products'] = $this->product_repository->getProducts();

		echo view('layout/header', $this->data);
        echo view('layout/sidebar-left', $this->data);
        echo view('payment/index', $this->data);
        echo view('layout/footer', $this->data);
    }

    public function payments() {
        $this->response
            ->setStatusCode(200)
            ->setJSON([
                'data'   => $this->payment_repository->getPayments(),
                'status' => 200
            ])
            ->send();
    }
}