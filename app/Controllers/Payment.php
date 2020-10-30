<?php 

namespace App\Controllers;
use App\Models\PaymentModel;
use App\Models\ClientModel;
use App\Models\ProductModel;

class Payment extends BaseController {
    
    private $payment_model;

    public function __construct() { 
        $this->payment_model = new PaymentModel();
        $this->client_model  = new ClientModel();
        $this->product_model = new ProductModel();
        
        $this->data['complement']  = 'Payments';
    }

	public function index() {
        $this->data['clients']  = $this->client_model->getClients();
        $this->data['products'] = $this->product_model->getProducts();

		echo view('layout/header', $this->data);
        echo view('layout/sidebar-left', $this->data);
        echo view('payment/index', $this->data);
        echo view('layout/footer', $this->data);
    }

    public function payments() {
        $this->response
            ->setStatusCode(200)
            ->setJSON([
                'data'   => $this->payment_model->getPayments(),
                'status' => 200
            ])
            ->send();
    }
}