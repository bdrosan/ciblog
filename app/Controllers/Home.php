<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\CategoryModel;

class Home extends BaseController
{
	public function index()
	{
		helper('custom');
		$post = new PostModel();
		$category = new CategoryModel();
		$data['posts'] = $post->getPostLimit(6);
		$data['categories'] = $category->getCategoryLimit(6);
		return view('pages/home', $data);
	}
}