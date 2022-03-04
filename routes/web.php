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
 * -----------------------------------------------------------Client Page-----------------------------------------------------------
 */
$router->get('/', [HomePage::class, '__getHomePage']);

/**
 * --------------------News Plugin--------------------
 */
$router->get('/news', [NewsPageClient::class, '__getNewsPageClient']);

$router->get('/news-detail/{target}',[NewsPageClient::class, '__getNewsDetailPageClient']);

/**
 * 
 */
$router->get('/about-us', [HomePage::class, '__getAboutPage']);

$router->get('/subscriber-form', [HomePage::class, '__getSubscriberForm']);

/**
 * -----------------------------------------------------------Admin Dashboard-----------------------------------------------------------
 */
$router->get('/dashboard/login', [Login::class, '__getAdminLogin']);
$router->get('/dashboard/register', [Register::class, '__getAdminRegister']);
$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);

/**
 * -------------------Auth Plugin-------------------
 */
$router->post('/dashboard/login', [Login::class, '__postAdminLogin']);
$router->post('/dashboard/register', [Register::class, '__postAdminRegister']);


$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);
$router->get('/dashboard/subscribers', [SubscriberPage::class, '__getSubscriberPage']);

/**
 * -------------------News Plugin-------------------
 */
$router->get('/dashboard/news', [NewsPage::class, '__getNewsPage']);
$router->get('/dashboard/news/create',[NewsPage::class, '__getAddForm']);

$router->post('/dashboard/news/create',[NewsPage::class, '__postAddForm']);

/**
 * -------------------Logs Plugin-------------------
 */
$router->get('/dashboard/activity-logs/{target}', [ActivityLogsPage::class, '__getActivityLogsPage']);

/**
 * -------------------Major Plugin-------------------
 */
$router->get('/dashboard/majors', [MajorsPage::class, '__majorsPage']);



/**
 * -------------------ERROR Plugin-------------------
 */
$router->get('/error-status/404-error', [ERRORPage::class, '__get404Page']);
$router->get('/error-status/500-error', [ERRORPage::class, '__get500Page']);
