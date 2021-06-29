<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Dani Properties - Consultant Property'
		];
		echo view('/pages/home', $data);
	}
}
