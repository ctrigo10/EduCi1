<?php namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
	public function index()
	{
		helper('form');
		return view('login/login_view');
	}

	public function login()
	{
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$userModel = new UserModel();
		if($this->loginFormValidation()){
			$username = $request->getPostGet('username');
			$password = $request->getPostGet('password');
			$user = $userModel->buscarUsuario($username,$password);
			if(!is_null($user)){
				$session->set([
					'id' => $user->id,
					'username'=> $user->username,
					'logged_in' => true,
				]);
				return redirect()->to('/user');		
			}
			else{
				$session->setFlashdata('error','El usuario  o password son erroneos');
				return $this->index();	
			}
		}
		//return redirect()->to('/login');
		return $this->index();
	}

	public function logout()
	{
		$session = \Config\Services::session();
		$session->remove(['id','username','logged_in']);
		$session->destroy();
		return $this->index();
	}

	private function loginFormValidation(){
        $val = $this->validate([
            'username' => 'required',
            'password' => 'required',
		]);
        return $val;
    }

}
