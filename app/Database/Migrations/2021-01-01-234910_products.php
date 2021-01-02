<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
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
			'observation' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
                'default'    => ''
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP', 
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey(['id'], true);
		$this->forge->createTable('products');

        $this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
