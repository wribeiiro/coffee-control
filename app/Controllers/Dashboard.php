<?php 

namespace App\Controllers;
use App\Models\DashboardModel;

class Dashboard extends BaseController {
    
    private $dashboard_model;

    public function __construct() { 
        $this->dashboard_model = new DashboardModel();
        $this->data['complement']  = 'Dashboard';
    }

	public function index() {
		echo view('layout/header', $this->data);
        echo view('layout/sidebar-left', $this->data);
        echo view('dashboard/index', $this->data);
        echo view('layout/footer', $this->data);
    }
}