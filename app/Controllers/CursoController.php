<?php namespace App\Controllers;

use App\Models\CursoModel;

class Cursocontroller extends BaseController
{
	public function index()
	{
        $cursoModel = new CursoModel();
        $data['cursos'] = $cursoModel->findAll();
        $data['title'] = "Cursos";
        return view('curso/cursos_view', $data);
    }

    public function newAction(){
        helper('form');
        $data['title'] = 'Nuevo Curso';
        return view('curso/nuevo_view',$data);
    }

    public function createAction(){
        if($this->cursoCreateFormValidation()){
            $cursoModel = new CursoModel();
            $request = \Config\Services::request();
            $session = \Config\Services::session();
            $curso = $request->getPostGet();
            $cursoModel->insert($curso);
            $session->setFlashdata('message','El curso '.$curso['descripcion'].' fue registrado correctamente');
            return redirect()->to('/curso');
        } else{ //mostrar mensajes de error
            //var_dump(\Config\Services::validation()->getErrors());
            return $this->newAction();
        }
    }

    private function cursoCreateFormValidation(){
        $val = $this->validate([
            'descripcion' => 'required|min_length[3]',
            'precio' => 'required',
        ],[ //mensajes de validación

        ]);
        return $val;
    }
}