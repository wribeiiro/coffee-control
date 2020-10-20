<?php 

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'users';

	/**
	 * getUser
	 *
	 * @param string $login
	 * @param string $pass
	 * @return null|object
	 */
    public function getUser(string $login, string $pass):? object {
        $sql   = "SELECT * FROM users WHERE name = '$login' LIMIT 1";
        $query = $this->db->query($sql, [$login, $login, $pass]);

		return $query->getRow();
	}
}