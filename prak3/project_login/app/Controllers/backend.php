<?php
	namespace App\Controllers;
	use CodeIgniter\Controller;
	class Backend extends BaseController
	{
		public function index()
		{
		return view('backend/layout');
		}
	}
?>