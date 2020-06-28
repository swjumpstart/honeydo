<?php namespace app\Database\Migrations;


use CodeIgniter\Database\Migration;

class AddTask extends Migration
{

	public function up()
	{
		$this->forge->addField([
			'id'	=> [
				'type'	=> 'INT',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'description'	=> [
				'type'	=> 'TEXT'
			],
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('task', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('task');
	}
}
