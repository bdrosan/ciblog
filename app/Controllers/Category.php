<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostCategoryModel;
use App\Models\CategoryModel;

class Category extends BaseController
{
	public function index()
	{
		$model = new CategoryModel();
		$data['categories'] = $model->getCategory();
		$data['title'] = 'Category';
		echo view('category/index', $data);
	}

	public function post($slug)
	{
		helper('custom');
		$postCategory = new PostCategoryModel();
		$category = new CategoryModel();
		$data['category'] = $category->getCategory($slug);
		$data['posts'] = $postCategory->getPost($data['category']['id']);
		$data['title'] = $data['category']['name'];
		echo view('category/post', $data);
	}
}