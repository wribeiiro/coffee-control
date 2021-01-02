<?php

namespace App\Repositories;

use App\Models\ClientModel;

class ClientRepository {
    
    protected $model;

    protected $returnType = 'object';
    
    public function __construct() {
        $this->model = new ClientModel();
    }

    public function getClients(): array {
        return $this->model->findAll();
	}
}