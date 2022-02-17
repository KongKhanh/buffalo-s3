<?php   

/*
|--------------------------------------------------------------------------
| Initial Router Object
|--------------------------------------------------------------------------
*/
$router = new Router();
/*
|--------------------------------------------------------------------------
| The most basic Laravel routes accept a URI and a closure, 
| providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files
|
| These files are automatically loaded by your application.
|--------------------------------------------------------------------------
*/

$router->get('/', [Welcome::class, '__index']);

/**
 * -----------------------------------------------------------Admin Dashboard-----------------------------------------------------------
 */
$router->get('/dashboard/login', [Login::class, '__getAdminLogin']);

$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);