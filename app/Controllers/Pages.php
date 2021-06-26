<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function view($page='home')
	{
		if(!is_file(APPPATH.'/Views/pages/'.$page.'.php'))
		{
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		$data['title'] = ucfirst($page);

		return view('pages/home',$data);
	}
}
