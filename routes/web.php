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

$router->get('/news/category/{target}', [NewsPageClient::class, '__getNewsByCate']);

$router->get('/news-detail/{target}',[NewsPageClient::class, '__getNewsDetailPageClient']);


/**
 * Majors Plugins
 */
$router->get('/majors', [MajorPageClient::class, '__getAllMajorsPage']);
$router->get('/majors/review/{target}', [MajorPageClient::class, '__getReviewMajorsByID']);

/**
 * Level-Of-Traning Plugins
 */
$router->get('/level-of-traning/get-majors/{id}', [MajorPageClient::class, '__getMajorsByLOT']);

/**
 *  Intro Plugins
 */
$router->get('/about-us', [HomePage::class, '__getAboutPage']);

$router->get('/contact-us', [HomePage::class, '__getContactPage']);

/**
 * Subscriber Plugins
 */
// $router->get('/subscriber-form', [HomePage::class, '__getSubscriberForm']);
$router->post('/subscriber-form', [SubscriberPage::class, '__postSubscriberPage']);

/**
 * -----------------------------------------------------------Admin Dashboard-------------------------------------------------------------------------------------
 */
/**
 * -------------------Auth Plugin-------------------
 */
$router->get('/dashboard/login', [Login::class, '__getAdminLogin']);
$router->get('/dashboard/register', [Register::class, '__getAdminRegister']);

$router->post('/dashboard/login', [Login::class, '__postAdminLogin']);
$router->post('/dashboard/register', [Register::class, '__postAdminRegister']);

/**
 * -------------------Analytics Plugin-------------------
 */
$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage']);

/**
 * -------------------Subscribers Plugin-------------------
 */
$router->get('/dashboard/subscribers', [SubscriberPage::class, '__getSubscriberPage']);
$router->post('/dashboard/subscriber/update/{id}', [SubscriberPage::class, '__postUpdate']);
$router->get('/dashboard/subscriber/update/{id}', [SubscriberPage::class, '__getUpdateForm']);
$router->post('/dashboard/subscriber/delete', [SubscriberPage::class, '__deleteSubscriber']);


/**
 * -------------------News Plugin-------------------
 */
$router->get('/dashboard/news', [NewsPage::class, '__getNewsPage']);
$router->get('/dashboard/news/create',[NewsPage::class, '__getAddForm']);
$router->get('/dashboard/news/update/{id}',[NewsPage::class, '__getUpdateForm']);

$router->get('/dashboard/news/categories', [NewsPage::class, '__getNewsCategoryPage']);
$router->get('/dashboard/news/categories/update/{id}', [NewsPage::class, '__getNewsCategoryForm']);
$router->get('/dashboard/news/categories/create',[NewsPage::class, '__getAddMenuCateForm']);


$router->post('/dashboard/news/update/{id}',[NewsPage::class, '__postUpdate']);
$router->post('/dashboard/news/delete',[NewsPage::class, '__postDelete']);
$router->post('/dashboard/news/create',[NewsPage::class, '__postAddForm']);

$router->post('/dashboard/news/categories/update/{id}', [NewsPage::class, '__postNewsCategoryForm']);
$router->post('/dashboard/news/categories/delete', [NewsPage::class, '__postNewsCategoryDelete']);
$router->post('/dashboard/news/categories/create',[NewsPage::class, '__postAddNewsCateForm']);


/**
 * -------------------Logs Plugin-------------------
 */
$router->get('/dashboard/activity-logs/{target}', [ActivityLogsPage::class, '__getActivityLogsPage']);

/**
 * -------------------Major Plugin-------------------
 */
$router->get('/dashboard/majors', [MajorsPage::class, '__majorsPage']);
$router->get('/dashboard/majors/create', [MajorsPage::class, '__getAddForm']);
$router->get('/dashboard/majors/update/{id}', [MajorsPage::class, '__getUpdateForm']);

$router->post('/dashboard/majors/create', [MajorsPage::class, '__postAdd']);
$router->post('/dashboard/majors/update/{id}', [MajorsPage::class, '__postUpdate']);
$router->post('/dashboard/majors/delete', [MajorsPage::class, '__postDelete']);

/**
 * -------------------VideoIframe Plugin-------------------
 */
$router->get('/dashboard/video-iframe', [VideoIFramePage::class, '__getVideoPage']);
$router->get('/a', [VideoIFramePage::class, '__getUpdateForm']);

/**
 * -------------------Level Of Training Plugin-------------------
 */
$router->get('/dashboard/level-of-training', [LevelOfTraining::class, '__getLevelOfTrainingPage']);
$router->get('/dashboard/level-of-training/update/{id}', [LevelOfTraining::class, '__getUpdateForm']);
$router->get('/dashboard/level-of-training/create', [LevelOfTraining::class, '__getAddForm']);

$router->post('/dashboard/level-of-training/update/{id}', [LevelOfTraining::class, '__postUpdateForm']);
$router->post('/dashboard/level-of-training/delete', [LevelOfTraining::class, '__postDelete']);
$router->post('/dashboard/level-of-training/create', [LevelOfTraining::class, '__postAdd']);


/**
 * -------------------Menu Categories Plugin-------------------
 */
$router->get('/dashboard/menu-cate', [MenuCatePage::class, '__getMenuCatePage']);
$router->get('/dashboard/menu-cate/create/type/{type}', [MenuCatePage::class, '__getAddForm']);
$router->get('/dashboard/menu-cate/update/{id}', [MenuCatePage::class, '__getUpdateForm']);

$router->post('/dashboard/menu-cate/create', [MenuCatePage::class, '__postAdd']);
$router->post('/dashboard/menu-cate/update/{id}', [MenuCatePage::class, '__postUpdate']);
$router->post('/dashboard/menu-cate/delete', [MenuCatePage::class, '__postDelete']);

/**
 * -------------------Intro Page Plugin-------------------
 */
$router->get('/dashboard/about-us/introduce/edit', [AboutUs::class, '__getUpdateIntro']);

$router->post('/dashboard/about-us/introduce/edit', [AboutUs::class, '__postUpdateIntro']);

$router->get('/dashboard/about-us/contact/edit', [AboutUs::class, '__getUpdateContact']);

$router->post('/dashboard/about-us/contact/edit', [AboutUs::class, '__postUpdateContact']);

$router->get('/dashboard/about-us/information-getting/edit', [AboutUs::class, '__getUpdateInformation']);

$router->post('/dashboard/about-us/information-getting/edit', [AboutUs::class, '__postUpdateInformation']);

/**
 * Tool Third Plugins
 */
$router->get('/dashboard/tool-third/google-map', [ThirdToolPage::class, '__getGoogleMapAddress']);

$router->get('/dashboard/tool-third/facebook-chat-messenger', [ThirdToolPage::class, '__getFacebookChatMessenger']);

$router->post('/dashboard/tool-third/update/by-switch-case', [ThirdToolPage::class, '__postUpdateThirdToolPlugins']);

/**
 * -----------------------------------------------------------API-----------------------------------------------------------
 */
$router->get('/api/majors-by-id/{id}', [MajorsPage::class, '__getMajorsById']);
 
/**
 * -------------------ERROR Plugin-------------------
 */
$router->get('/error-status/404-error', [ERRORPage::class, '__get404Page']);
$router->get('/error-status/500-error', [ERRORPage::class, '__get500Page']);

