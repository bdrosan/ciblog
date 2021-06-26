<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Category extends Seeder
{
	public function run()
	{
		$names = array('Personal','Corporate','Finance','Sports','Business','Politics','Fitness','Travel','Current Events','Entertainment','Fashion','Lifestyle','Economics','Parenting','Career','Nature','Celebrity Gossip','Medical','Shopping','Science','Education','Money','University','Marketing','History','SEO','Technology','Health','Law','Photography','Movie','Wedding','Food','Design','Music');

		$data = [];

		foreach ($names as $key=>$name) {
			$data[$key]['name'] = $name;
			$data[$key]['slug'] = url_title($name, '-', TRUE);
		}

		foreach ($data as $value) {
			$this->db->table('categories')->insert($value);
		}
	}
}
