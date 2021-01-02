<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'username' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 200,
				'default'    => ''
			],
			'password' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 200,
				'default'    => ''
			],
			'email' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 200,
				'default'    => ''
			],
			'first_name' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 200,
				'default'    => ''
			],
			'last_name' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 200,
				'default'    => ''
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP', 
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey(['id'], true);
		$this->forge->createTable('users');

        $this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
