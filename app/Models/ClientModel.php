<?php 

namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
	protected $table = 'clients';

	/**
     * Undocumented function
     *
     * @return array
     */
    public function getClients(): array {
        $sql   = "SELECT * FROM clients ORDER BY name ASC";
        $query = $this->db->query($sql);

		return $query->getResult();
	}
}