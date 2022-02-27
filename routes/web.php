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



/**
 * -----------------------------------------------------------Admin Dashboard-----------------------------------------------------------
 */
$router->get('/dashboard/login', [Login::class, '__getAdminLogin']);
$router->get('/dashboard/register', [Register::class, '__getAdminRegister']);
$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);


// POST /dashboard

$router->post('/dashboard/login', [Login::class, '__postAdminLogin']);
$router->post('/dashboard/register', [Register::class, '__postAdminRegister']);


$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);
$router->get('/dashboard/subscribers', [SubscriberPage::class, '__getSubscriberPage']);
$router->get('/dashboard/news', [NewsPage::class, '__getNewsPage']);
