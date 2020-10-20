<?php 

namespace App\Controllers;
use App\Models\PaymentModel;

class Payment extends BaseController {
    
    private $payment_model;

    public function __construct() { 
        $this->payment_model = new PaymentModel();
        $this->data['complement']  = 'Payments';
    }

	public function index() {
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