<?php 

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table = 'products';

	protected $returnType = 'object';

	protected $allowedFields = ['name', 'observation'];
}