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

$router->get('/news', [NewsPageClient::class, '__getNewsPageClient']);

$router->get('/news-detail/{target}',[NewsPageClient::class, '__getNewsDetailPageClient']);

$router->get('/about-us', [HomePage::class, '__getAboutPage']);

$router->get('/subscriber-form', [HomePage::class, '__getSubscriberForm']);

/**
 * -----------------------------------------------------------Admin Dashboard-----------------------------------------------------------
 */
$router->get('/dashboard/login', [Login::class, '__getAdminLogin']);
$router->get('/dashboard/register', [Register::class, '__getAdminRegister']);
$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);


$router->post('/dashboard/login', [Login::class, '__postAdminLogin']);
$router->post('/dashboard/register', [Register::class, '__postAdminRegister']);


$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);
$router->get('/dashboard/subscribers', [SubscriberPage::class, '__getSubscriberPage']);
$router->get('/dashboard/news', [NewsPage::class, '__getNewsPage']);
$router->get('/dashboard/activity-logs/{target}', [ActivityLogsPage::class, '__getActivityLogsPage']);


$router->get('/status/404-error', function() {

    return view("pages/404_error.view.php");
});
