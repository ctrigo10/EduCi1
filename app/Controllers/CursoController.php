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

    public function editAction($id){
        $cursoModel = new CursoModel();
        helper('form');
        $curso = $cursoModel->find($id); 
        $data['curso'] = $curso;
        $data['title'] = 'Editar Curso';
        return view('curso/editar_view', $data);
    }

    public function updateAction(){
        if($this->cursoCreateFormValidation()){
            $cursoModel = new CursoModel();
            $request = \Config\Services::request();
            $session = \Config\Services::session();
            $curso = $request->getPostGet();
            $id = $request->getPostGet('id');
            $cursoModel->update($id, $curso);
            $session->setFlashdata('message','El curso '.$curso['descripcion'].' fue editado correctamente');
            return redirect()->to('/curso');
        } else{ //mostrar mensajes de error
            //var_dump(\Config\Services::validation()->getErrors());
            return $this->editAction();
        }
    }

    public function deleteAction($id){
        $cursoModel = new CursoModel();
        $curso = $cursoModel->find($id);
        if($curso){
            $cursoModel->delete($id);
            $session = \Config\Services::session();
            $session->setFlashdata('message','El curso '.$curso->descripcion.' fue eliminado correctamente');
            return redirect()->to('/curso');
        }else{
            echo 'No existe registro de eliminar';
        }
    }
}