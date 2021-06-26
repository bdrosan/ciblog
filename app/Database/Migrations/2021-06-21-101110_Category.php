<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=>[
				'type'				=> 'INT',
				'constraint'     	=> 5,
				'unsigned'       	=> true,
				'auto_increment' 	=> true,
			],
			'name'			=>[
				'type'				=> 'VARCHAR',
				'constraint'		=> 100,
			],
			'slug'			=>[
				'type'				=> 'VARCHAR',
				'constraint'		=> 100,
				'unique'			=> true
			],
			'parent_id'		=>[
				'type'				=> 'INT',
				'constraint'     	=> 5,
				'unsigned'       	=> true,
				'null'				=> true,
			],
			'image'			=>[
				'type'       	 	=> 'VARCHAR',
				'constraint' 	 	=> 128,
				'null'       	 	=> true,
			],
			'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			'deleted_at'	=>[
				'type'       	 	=> 'DATETIME',
				'null'				=> true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('parent_id','categories','id');
		$this->forge->createTable('categories');
	}

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
