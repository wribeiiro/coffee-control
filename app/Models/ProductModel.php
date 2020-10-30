<?php 

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table = 'products';

	/**
     * Undocumented function
     *
     * @return array
     */
    public function getProducts(): array {
        $sql   = "SELECT * FROM products ORDER BY name ASC";
        $query = $this->db->query($sql);

		return $query->getResult();
	}
}