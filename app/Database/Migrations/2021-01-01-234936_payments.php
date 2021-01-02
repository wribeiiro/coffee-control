<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payments extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'client_id' => [
                'type' => 'INT'
            ],
            'product_id' => [
                'type' => 'INT',
            ],
            'method_payment_id' => [
                'type'       => 'INT'
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => "11,4",
                'default'    => '0'
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => ''
            ],
			'observation' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
                'default'    => ''
            ],
            'expire_in' => [
                'type' => 'DATETIME'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP', 
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);

        $this->forge->addKey(['id'], true);
		$this->forge->addForeignKey('client_id', 'clients', 'id','CASCADE','CASCADE');
		$this->forge->addForeignKey('product_id', 'products', 'id','CASCADE','CASCADE');
		$this->forge->addForeignKey('method_payment_id', 'methods_payment', 'id','CASCADE','CASCADE');
        $this->forge->createTable('payments');

        $this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('payments');
	}
}
