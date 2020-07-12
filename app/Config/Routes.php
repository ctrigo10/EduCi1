<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//Ruta hola mundo
$routes->get('/hola/ruta',function(){
	echo 'hola desde Routes.php';
});

$routes->get('/hola/controlador', 'Hola_controller::index');

$routes->get('/hola/parametros/(:any)/(:num)', 'Hola_controller::parametrosAction/$1/$2');

$routes->get('/hola/vista', 'Hola_controller::vistaAction');

$routes->get('/hola/mis/datos', 'Hola_controller::holaMisDatosAction');

$routes->get('/persona/datos/(:any)/(:num)','PersonaController::datosAction/$1/$2');

$routes->get('/persona/empleado/(:any)/(:num)','PersonaController::sueldoAction/$1/$2');

//Envio de Colecciones
$routes->get('/persona/listar','PersonaController::listarAction');

//practica 1
$routes->get('/practica/misdatos', 'PracticaController::misdatosAction');
$routes->get('/practica/tabla/multiplicar/(:num)', 'PracticaController::tablaMultiplicarAction/$1');
$routes->get('/practica/matriz/(:num)', 'PracticaController::matrizAction/$1');
$routes->get('/practica/productos', 'PracticaController::productosAction');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
