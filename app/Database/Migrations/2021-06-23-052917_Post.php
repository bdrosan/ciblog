<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          	=> [
				'type'           	=> 'INT',
				'constraint'     	=> 5,
				'unsigned'       	=> true,
				'auto_increment' 	=> true,
			],
			'title'       	=> [
				'type'       	 	=> 'VARCHAR',
				'constraint' 	 	=> 128,
			],
			'slug'       	=> [
				'type'       	 	=> 'VARCHAR',
				'constraint' 	 	=> 128,
				'unique'	 	 	=> true,
			],
			'description' 	=> [
				'type' 	  	 	 	=> 'TEXT',
				'null' 		 	 	=> true,
			],
			'image'       	=> [
				'type'       	 	=> 'VARCHAR',
				'constraint' 	 	=> 128,
				'null'       	 	=> true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('posts');
	}

	public function down()
	{
		$this->forge->dropTable('posts');
	}
}