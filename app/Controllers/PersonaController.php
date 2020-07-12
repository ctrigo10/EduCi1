<?php namespace App\Controllers;

class PersonaController extends BaseController
{
	public function index()
	{
		return "hola";
	}

	public function datosAction($nombre, $edad)
	{
        $data['nombre'] = $nombre;
        $data['edad'] = $edad;
        $data['observacion'] = $edad >= 18 ? 'Mayor de edad':'Menor de edad';
        return view('Persona/datos_view', $data);
    }
    
    public function sueldoAction($nombre, $sueldo)
	{
        $data['nombre'] = $nombre;
        $data['sueldo'] = $sueldo;
        $data['liquidoPagable'] = $sueldo - (0.1 * 5000);
        return view('Persona/sueldo_view', $data);
    }
    
    public function listarAction(){
        $lista = array(
            array('id' => 1, 'nombre' =>'Mateo', 'edad' => 25),
            array('id' => 2, 'nombre' =>'Marcos', 'edad' => 35),
            array('id' => 3, 'nombre' =>'Juan', 'edad' => 30),
            array('id' => 4, 'nombre' =>'Pedro', 'edad' => 28),
        );
        $data['personas'] = $lista;
        return view('Persona/lista_view', $data);
    }
	//--------------------------------------------------------------------

}
