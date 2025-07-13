<?php

use App\Controllers\Home;
use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('base', 'Home::base');
$routes->get('hola_mundo', 'Home::hola_mundo');
$routes->get('zamir/mision_vision', 'Home::misionVision');
$routes->get('zamir/presentacion', 'Home::presentacion');
$routes->get('zamir/trayectoria', 'Home::trayectoria');
$routes->get('zamir/imagenes', 'Home::imagenes');

//--REPOSITORIO
$routes->group('repositorios', function($routes) {
    $routes->get('misionVision', 'Home::misionVision');
    $routes->get('imagenes', 'Home::imagenes');
    $routes->get('servicios', 'Home::servicios');
    $routes->get('areas', 'Home::areas');
    $routes->get('testimonios', 'Home::testimonios');
    $routes->get('publicaciones', 'Home::publicaciones');
});


$routes->group('repositorioMiguel', function($routes) {
    $routes->get('head', 'Home::Pagina');
    // $routes->get('mision-vision', 'Home::Mision');
    // $routes->get('comunidades', 'Home::comunidades');
    // $routes->get('descarga', 'Home::archivos');
});
