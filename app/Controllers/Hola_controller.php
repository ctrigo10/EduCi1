<?php namespace App\Controllers;

class Hola_controller extends BaseController
{
	public function index()
	{
		return "hola";
	}

	public function parametrosAction($nombre, $edad)
	{
		$mensaje = 'Nombre: '.$nombre.' ';
		$mensaje.= 'Edad '.$edad;
		
		return $mensaje;
	}

	public function vistaAction()
	{
		$data['title'] = 'Hola Vista';
		return view('hola_view',$data);
	}

	public function holaMisDatosAction(){
		return view('hola_mis_datos_view');
	}

	//--------------------------------------------------------------------

}
