<?php namespace App\Controllers;

class PracticaController extends BaseController
{
	public function index()
	{
        
	}

	public function misdatosAction()
	{
        $data['nombre'] = 'Carlos Ariel';
        $data['apellido'] = 'Trigo Vargas';
        $data['email'] = 'carlos.trigo.vargas@gmail.com';
        $data['telefono'] = 72414320;
        return view('Practica/misdatos_view', $data);
    }
    
    public function tablaMultiplicarAction($num)
	{
        $data['num'] = $num;
        return view('Practica/tablaMultiplicar_view', $data);
    }
    
    public function matrizAction($num){
        $data['num'] = $num;
        return view('Practica/matriz_view', $data);
    }

    public function productosAction(){
        $lista = array(
            array('CODIGO' => 1, 'PRODUCTO' =>'ARROZ', 'PRECIO' => 56.50, 'CANTIDAD' => 10, 'FECHA_SALIDA' => '2020/02/25'),
            array('CODIGO' => 2, 'PRODUCTO' =>'FIDEO', 'PRECIO' => 135.30, 'CANTIDAD' => 15, 'FECHA_SALIDA' => '2020/02/25'),
            array('CODIGO' => 3, 'PRODUCTO' =>'CHOCOLATE', 'PRECIO' => 30.00, 'CANTIDAD' => 40, 'FECHA_SALIDA' => '2020/02/25'),
            array('CODIGO' => 4, 'PRODUCTO' =>'AZUCAR', 'PRECIO' => 128.00, 'CANTIDAD' => 20, 'FECHA_SALIDA' => '2020/02/25'),
            array('CODIGO' => 5, 'PRODUCTO' =>'CAFE', 'PRECIO' => 58.30, 'CANTIDAD' => 25, 'FECHA_SALIDA' => '2020/02/25'),
        );
        $data['productos'] = $lista;
        return view('Practica/productos_view', $data);
    }
	//--------------------------------------------------------------------

}
