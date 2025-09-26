<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//rutas para instructores
$routes->get('/instructores', 'instructoresController::verInstructores');
$routes->post('/guardarInstructor', 'instructoresController::guardarInstructores');
$routes->get('/eliminarInstructor/(:num)', 'instructoresController::eliminarInstructor/$1');
$routes->get('/localizarInstructor/(:num)', 'instructoresController::localizarInstructor/$1');
$routes->post('/modificarInstructor', 'instructoresController::modificarInstructor');       

//rutas para servicios
$routes->get('/servicios', 'serviciosController::verServicios');
$routes->post('/guardarServicio', 'serviciosController::guardarServicio');
$routes->get('/eliminarServicio/(:num)', 'serviciosController::eliminarServicio/$1');
$routes->get('/localizarServicio/(:num)', 'serviciosController::localizarServicio/$1');
$routes->post('/modificarServicio', 'serviciosController::modificarServicio');  

//rutas para clientes
$routes->get('/clientes', 'clientesController::verClientes');
$routes->post('/guardarCliente', 'clientesController::guardarCliente');
$routes->get('/eliminarCliente/(:num)', 'clientesController::eliminarCliente/$1');
$routes->get('/localizarCliente/(:num)', 'clientesController::localizarCliente/$1');
$routes->post('/modificarCliente', 'clientesController::modificarCliente');  

//rutas para ventas
$routes->get('/ventas', 'ventasController::verVentas');
$routes->post('/guardarVenta', 'ventasController::guardarVenta');
$routes->get('/eliminarVenta/(:num)', 'ventasController::eliminarVenta/$1');
$routes->get('/localizarVenta/(:num)', 'ventasController::localizarVenta/$1');
$routes->post('/modificarVenta', 'ventasController::modificarVenta');  

//rutas para planes
$routes->get('/planes', 'planesController::verPlanes');
$routes->post('/guardarPlan', 'planesController::guardarPlan');
$routes->get('/eliminarPlan/(:num)', 'planesController::eliminarPlan/$1');
$routes->get('/localizarPlan/(:num)', 'planesController::localizarPlan/$1');
$routes->post('/modificarPlan', 'planesController::modificarPlan');  

//rutas para vendedores
$routes->get('/vendedores', 'vendedoresController::verVendedores');
$routes->post('/guardarVendedor', 'vendedoresController::guardarVendedor');
$routes->get('/eliminarVendedor/(:num)', 'vendedoresController::eliminarVendedor/$1');
$routes->get('/localizarVendedor/(:num)', 'vendedoresController::localizarVendedor/$1');
$routes->post('/modificarVendedor', 'vendedoresController::modificarVendedor'); 

//rutas para productos
$routes->get('/productos', 'productosController::verProductos');
$routes->post('/guardarProducto', 'productosController::guardarProducto');
$routes->get('/eliminarProducto/(:num)', 'productosController::eliminarProducto/$1');
$routes->get('/localizarProducto/(:num)', 'productosController::localizarProducto/$1');
$routes->post('/modificarProducto', 'productosController::modificarProducto');  
