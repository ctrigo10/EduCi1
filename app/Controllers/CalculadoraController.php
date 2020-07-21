<?php namespace App\Controllers;

use App\Libraries\Rectangulo;

class CalculadoraController extends BaseController
{
	public function index()
	{
		return view('welcome_message');
    }

    public function geometriaAction($b,$a){
        $rectangulo = new Rectangulo();
        $rectangulo->setBase($b);
        $rectangulo->setAltura($a);
    
        $data['base'] = $b;
        $data['altura'] = $a;
        $data['area'] = $rectangulo->getArea();
        $data['perimetro'] = $rectangulo->getPerimetro();

        return view('Calculadora/libreria_view', $data);
    }

    public function aritemeticaAction($v1,$v2){
        helper('calculadora_helper');

        $data['va'] = $v1;
        $data['vb'] = $v2;

        return view('Calculadora/calculadora_view', $data);
    }

    public function rectanguloAction($v1,$v2){
        helper('calculadora_helper');

        $data['va'] = $v1;
        $data['vb'] = $v2;

        return view('Calculadora/rectangulo_view', $data);
    }

    public function circuloAction($v1){
        helper('calculadora_helper');

        $data['va'] = $v1;

        return view('Calculadora/circulo_view', $data);
    }
	//--------------------------------------------------------------------

}
