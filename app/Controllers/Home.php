<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function vistamuebles() {
		$vistas = view('layouts/header') . view('muebles/inicio') . view('layouts/footer');
		return $vistas;
	}

	//--------------------------------------------------------------------

}
