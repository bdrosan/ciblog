<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostCategory extends Migration
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
			'post_id'          	=> [
				'type'           	=> 'INT',
				'constraint'     	=> 5,
				'unsigned'       	=> true,
			],
			'category_id'          	=> [
				'type'           	=> 'INT',
				'constraint'     	=> 5,
				'unsigned'       	=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('category_id', 'categories', 'id');
		$this->forge->addForeignKey('post_id', 'posts', 'id');
		$this->forge->createTable('postCategory');
	}

	public function down()
	{
		$this->forge->dropTable('postCategory');
	}
}