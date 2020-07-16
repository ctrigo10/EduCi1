<?php namespace App\Controllers;

use App\Models\UserModel;

class Usercontroller extends BaseController
{
	public function index()
	{
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        $data['title'] = "Usuarios";
        return view('user/users_view', $data);
    }
}