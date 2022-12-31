<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AdminController;
use Controllers\APIController;
use Controllers\CitaController;
use Controllers\LoginController;
use Controllers\ServicioController;
use MVC\Router;

$router = new Router();


// Iniciar Sesión
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// Recuperar Password
$router->get('/Olvide-password', [LoginController::class, 'olvide']);
$router->post('/Olvide-password', [LoginController::class, 'olvide']);
$router->get('/Recuperar-password', [LoginController::class, 'recuperar']);
$router->post('/Recuperar-password', [LoginController::class, 'recuperar']);


// Crear las cuentas de los uusarios
$router->get('/Crear-cuenta', [LoginController::class, 'crear']);
$router->post('/Crear-cuenta', [LoginController::class, 'crear']);


// Confirmar cuenta de los usuarios
$router->get('/Confirmar-cuenta', [LoginController::class, 'confirmar']);
$router->get('/Mensaje-confirmacion', [LoginController::class, 'mensaje']);

// AREA PRIVADA
$router->get('/Cita', [CitaController::class, 'index']);
$router->get('/Admin', [AdminController::class, 'index']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

// API de Citas
$router->get('/api/servicios', [APIController::class, 'index']);
$router->post('/api/citas', [APIController::class, 'guardar']);
$router->post('/api/eliminar', [APIController::class, 'eliminar']);

// CRUD de Servicios
$router->get('/servicios', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();