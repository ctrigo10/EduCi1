<?php namespace App\Controllers;

use App\Models\EstudianteModel;

class Estudiantecontroller extends BaseController
{
	public function index()
	{
		$estudianteModel = new EstudianteModel();
        $data['estudiantes'] = $estudianteModel->findAll();
        $data['title'] = "Estudiantes";
        return view('estudiante/estudiantes_view', $data);
    }
}