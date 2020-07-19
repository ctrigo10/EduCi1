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

    public function guardarAction(){
        $userModel = new UserModel();
        $user = array(
            'username' => 'Fernando',
            'password' => MD5('123456'),
            'email' => 'fer@curso.com',
        );
        $userModel->insert($user);
        echo 'El usuario '.$user['username'].' fue adicionado exitosamente';
    }

    public function actualizarAction(){
        $userModel = new UserModel();
        
        $user = array(
            'username' => 'David',
            'email' => 'david@curso.com',
        );
        $userModel->update(1,$user);
        echo 'El usuario '.$user['username'].' fue actualizado exitosamente';
    }

    public function eliminarAction($id){
        $userModel = new UserModel();
        if($userModel->find($id)){
            $userModel->delete($id);
            echo 'El usuario fue eliminado exitosamente';
        }
        else{
            echo 'no hay registro';
        }
    }

    public function listaAction($num){
        $userModel = new UserModel();
        $title='';
        if($num == 1){
            $title='Mostrar registros excepto eliminados';
            $users = $userModel->findAll();
        }else if($num == 2){
            $title='Mostrar registros y eliminados';
            $users = $userModel->withDeleted()->findAll();
        }else if($num == 3){
            $title='Mostrar eliminados';
            $users = $userModel->onlyDeleted()->findAll();
        }
        $data['title'] = $title;
        $data['users'] = $users;
        return view('user/listar_view',$data);
    }

    public function listaSqlAction(){
        $userModel = new UserModel();
        $users = $userModel->ObtenerUsuarios();
        foreach($users as $user){
            echo $user->id.'-';
            echo $user->username.'-';
            echo $user->email.'<br/>';
        }
        echo 'Total: '.count($users);
    }

    public function newAction(){
        helper('form');
        $data['title'] = 'Nuevo Usuario';
        return view('user/nuevo_view',$data);
    }

    public function createAction(){
        if($this->userCreateFormValidation()){
            $userModel = new UserModel();
            $request = \Config\Services::request();
            $session = \Config\Services::session();
            $user = $request->getPostGet();
            $user['password'] = MD5($request->getPostGet('password'));
            $userModel->insert($user);
            $session->setFlashdata('message','El usuario '.$user['username'].' fue registrado correctamente');
            return redirect()->to('/user');
        } else{ //mostrar mensajes de error
            //var_dump(\Config\Services::validation()->getErrors());
            return $this->newAction();
        }
    }

    private function userCreateFormValidation(){
        $val = $this->validate([
            'username' => 'required|min_length[3]',
            'password' => 'required|min_length[6]',
            'email' => 'required|valid_email|is_unique[users.email]',
        ],[ //mensajes de validación

        ]);
        return $val;
    }
}