<?php

namespace App\Repositories;

use App\Models\ProductModel;

class ProductRepository {
    
    protected $model;

    public function __construct() {
        $this->model = new ProductModel();
    }

    public function getProducts(): array {
        return $this->model->findAll();
	}
}