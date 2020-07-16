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
}