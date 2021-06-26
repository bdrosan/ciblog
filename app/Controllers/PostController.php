<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class PostController extends BaseController
{
	public function __construct()
	{
	}
	public function index()
	{
		//load custom functions
		helper('custom');

		$post = new PostModel();
		//$data['posts'] = $post->getPost();
		$data['title'] = 'Post Archive';
		$data = [
			'posts' => $post->paginate(12),
			'pager' => $post->pager,
		];

		return view('post/overview', $data);
	}

	public function view($slug = false)
	{
		$post = new PostModel();
		$data['post'] = $post->getPost($slug);

		if (empty($data['post'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the post: ' . $slug);
		}

		$data['title'] = $data['post']['title'];

		echo view('post/view', $data);
	}

	public function create()
	{
		$post = new PostModel();
		$data['title'] = 'Create a news item';

		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required|min_length[3]|max_length[255]',
			'description'  => 'required',
		])) {
			$post->save([
				'title' => $this->request->getPost('title'),
				'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
				'description'  => $this->request->getPost('description'),
			]);

			echo view('post/success', $data);
		} else {
			echo view('post/create', $data);
		}
	}
}