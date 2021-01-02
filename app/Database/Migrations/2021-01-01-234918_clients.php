<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clients extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'name' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 200,
				'default'    => ''
			],
			'cpf_cnpj' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 14,
				'default'    => ''
			],
			'uf_city' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
                'default'    => ''
            ],
			'phone_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 11,
                'default'    => ''
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP', 
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey(['id'], true);
		$this->forge->createTable('clients');

        $this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('clients');
	}
}
