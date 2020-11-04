<?php namespace App\Controllers;

class Home extends BaseController
{
	
	public function __construct()
	{

	}
	public function index()
	{
		helper('form');
		$session = session();
		$request = \Config\Services::request();

		if ($_POST) {
			if ($request->getPost('username') == 'testuser' && $request->getPost('password') == 'password') {
				$newdata = [
				    'username'  => 'testuser',
				    'logged_in' => TRUE
				];
				$session->set($newdata);

				
				return redirect()->to('list-data'); 
			}
		}
		
		return view('welcome_message');
	}

	public function list_data()
	{
		$session = session();
		
		if ($session->username == 'testuser' && $session->logged_in == TRUE) {
			return view('list-data');
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}	
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/'); 

	}

	//--------------------------------------------------------------------

}
