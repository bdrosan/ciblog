<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostCategory extends Seeder
{
	public function run()
	{
		$data = [
			[
				'post_id' => 1,
				'category_id' => 1
			],
			[
				'post_id' => 1,
				'category_id' => 2
			],
			[
				'post_id' => 2,
				'category_id' => 1
			],
			[
				'post_id' => 2,
				'category_id' => 2
			],
			[
				'post_id' => 2,
				'category_id' => 3
			],
			[
				'post_id' => 3,
				'category_id' => 1
			],
			[
				'post_id' => 3,
				'category_id' => 2
			],
			[
				'post_id' => 4,
				'category_id' => 4
			],
			[
				'post_id' => 4,
				'category_id' => 5
			],
			[
				'post_id' => 5,
				'category_id' => 3
			],
			[
				'post_id' => 5,
				'category_id' => 7
			],
			[
				'post_id' => 5,
				'category_id' => 1
			],
			[
				'post_id' => 6,
				'category_id' => 7
			],
			[
				'post_id' => 7,
				'category_id' => 4
			],
			[
				'post_id' => 7,
				'category_id' => 1
			],
			[
				'post_id' => 7,
				'category_id' => 9
			],
			[
				'post_id' => 8,
				'category_id' => 9
			],
			[
				'post_id' => 8,
				'category_id' => 8
			],
			[
				'post_id' => 9,
				'category_id' => 3
			],
		];

		foreach ($data as $value) {
			$this->db->table('postCategory')->insert($value);
		}
	}
}