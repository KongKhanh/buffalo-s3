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

$router->get('/news/video-iframe', [NewsPageClient::class, '__getVideoIframePage']);

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
$router->post('/subscriber-form', [SubscriberPage::class, '__postSubscriberPage']);

/**
 * ContactConsult Plugins
 */
$router->post('/contact-consult-form', [HomePage::class, '__postContactconsultForm']);

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

$router->get('/dashboard/analytics', [AnalyticsPage::class, '__getAnalyticsPage'])->middleware('auth');

/**
 * -------------------Ads-Slide Plugin-------------------
 */
$router->get('/dashboard/ads-slide/create',[AdsSlide::class, '__getAdsSlideAddForm'])->middleware('auth');
$router->get('/dashboard/ads-slide',[AdsSlide::class, '__getAdsSlideDashboar'])->middleware('auth');
$router->get('/dashboard/ads-slide/update/{id}',[AdsSlide::class, '__getUpdateForm'])->middleware('auth');

$router->post('/dashboard/ads-slide/create',[AdsSlide::class, '__postAdsSlideAddForm'])->middleware('auth');
$router->post('/dashboard/ads-slide/update/{id}',[AdsSlide::class, '__postUpdateForm'])->middleware('auth');
$router->post('/dashboard/ads-slide/delete',[AdsSlide::class, '__postDelete'])->middleware('auth');


/**
 * -------------------Subscribers Plugin-------------------
 */
$router->get('/dashboard/subscribers', [SubscriberPage::class, '__getSubscriberPage'])->middleware('auth');
$router->post('/dashboard/subscriber/update/{id}', [SubscriberPage::class, '__postUpdate'])->middleware('auth');
$router->get('/dashboard/subscriber/update/{id}', [SubscriberPage::class, '__getUpdateForm'])->middleware('auth');
$router->post('/dashboard/subscriber/delete', [SubscriberPage::class, '__deleteSubscriber'])->middleware('auth');


/**
 * -------------------News Plugin-------------------
 */
$router->get('/dashboard/news', [NewsPage::class, '__getNewsPage'])->middleware('auth');
$router->get('/dashboard/news/create',[NewsPage::class, '__getAddForm'])->middleware('auth');
$router->get('/dashboard/news/update/{id}',[NewsPage::class, '__getUpdateForm'])->middleware('auth');

$router->get('/dashboard/news/categories', [NewsPage::class, '__getNewsCategoryPage'])->middleware('auth');
$router->get('/dashboard/news/categories/update/{id}', [NewsPage::class, '__getNewsCategoryForm'])->middleware('auth');
$router->get('/dashboard/news/categories/create',[NewsPage::class, '__getAddMenuCateForm'])->middleware('auth');


$router->post('/dashboard/news/update/{id}',[NewsPage::class, '__postUpdate'])->middleware('auth');
$router->post('/dashboard/news/delete',[NewsPage::class, '__postDelete'])->middleware('auth');
$router->post('/dashboard/news/create',[NewsPage::class, '__postAddForm'])->middleware('auth');

$router->post('/dashboard/news/categories/update/{id}', [NewsPage::class, '__postNewsCategoryForm'])->middleware('auth');
$router->post('/dashboard/news/categories/delete', [NewsPage::class, '__postNewsCategoryDelete'])->middleware('auth');
$router->post('/dashboard/news/categories/create',[NewsPage::class, '__postAddNewsCateForm'])->middleware('auth');


/**
 * -------------------Logs Plugin-------------------
 */
$router->get('/dashboard/activity-logs/{target}', [ActivityLogsPage::class, '__getActivityLogsPage'])->middleware('auth');

/**
 * -------------------Major Plugin-------------------
 */
$router->get('/dashboard/majors', [MajorsPage::class, '__majorsPage'])->middleware('auth');
$router->get('/dashboard/majors/create', [MajorsPage::class, '__getAddForm'])->middleware('auth');
$router->get('/dashboard/majors/update/{id}', [MajorsPage::class, '__getUpdateForm'])->middleware('auth');

$router->post('/dashboard/majors/create', [MajorsPage::class, '__postAdd'])->middleware('auth');
$router->post('/dashboard/majors/update/{id}', [MajorsPage::class, '__postUpdate'])->middleware('auth');
$router->post('/dashboard/majors/delete', [MajorsPage::class, '__postDelete'])->middleware('auth');

/**
 * -------------------VideoIframe Plugin-------------------
 */
$router->get('/dashboard/video-iframe', [VideoIFramePage::class, '__getVideoPage'])->middleware('auth');
$router->get('/dashboard/video-iframe/create', [VideoIFramePage::class, '__getAddForm'])->middleware('auth');
$router->get('/dashboard/video-iframe/update/{id}', [VideoIFramePage::class, '__getUpdateForm'])->middleware('auth');

$router->post('/dashboard/video-iframe/create', [VideoIFramePage::class, '__postAdd'])->middleware('auth');
$router->post('/dashboard/video-iframe/update/{id}', [VideoIFramePage::class, '__postUpdate'])->middleware('auth');
$router->post('/dashboard/video-iframe/delete', [VideoIFramePage::class, '__postDelete'])->middleware('auth');

/**
 * -------------------Level Of Training Plugin-------------------
 */
$router->get('/dashboard/level-of-training', [LevelOfTraining::class, '__getLevelOfTrainingPage'])->middleware('auth');
$router->get('/dashboard/level-of-training/update/{id}', [LevelOfTraining::class, '__getUpdateForm'])->middleware('auth');
$router->get('/dashboard/level-of-training/create', [LevelOfTraining::class, '__getAddForm'])->middleware('auth');

$router->post('/dashboard/level-of-training/update/{id}', [LevelOfTraining::class, '__postUpdateForm'])->middleware('auth');
$router->post('/dashboard/level-of-training/delete', [LevelOfTraining::class, '__postDelete'])->middleware('auth');
$router->post('/dashboard/level-of-training/create', [LevelOfTraining::class, '__postAdd'])->middleware('auth');


/**
 * -------------------Menu Categories Plugin-------------------
 */
$router->get('/dashboard/menu-cate', [MenuCatePage::class, '__getMenuCatePage'])->middleware('auth');
$router->get('/dashboard/menu-cate/create/type/{type}', [MenuCatePage::class, '__getAddForm'])->middleware('auth');
$router->get('/dashboard/menu-cate/update/{id}', [MenuCatePage::class, '__getUpdateForm'])->middleware('auth');

$router->post('/dashboard/menu-cate/create', [MenuCatePage::class, '__postAdd'])->middleware('auth');
$router->post('/dashboard/menu-cate/update/{id}', [MenuCatePage::class, '__postUpdate'])->middleware('auth');
$router->post('/dashboard/menu-cate/delete', [MenuCatePage::class, '__postDelete'])->middleware('auth');

/**
 * -------------------Intro Page Plugin-------------------
 */
$router->get('/dashboard/about-us/introduce/edit', [AboutUs::class, '__getUpdateIntro'])->middleware('auth');

$router->post('/dashboard/about-us/introduce/edit', [AboutUs::class, '__postUpdateIntro'])->middleware('auth');

$router->get('/dashboard/about-us/contact/edit', [AboutUs::class, '__getUpdateContact'])->middleware('auth');

$router->post('/dashboard/about-us/contact/edit', [AboutUs::class, '__postUpdateContact'])->middleware('auth');

$router->get('/dashboard/about-us/information-getting/edit', [AboutUs::class, '__getUpdateInformation'])->middleware('auth');

$router->post('/dashboard/about-us/information-getting/edit', [AboutUs::class, '__postUpdateInformation'])->middleware('auth');

/**
 * Tool Third Plugins
 */
$router->get('/dashboard/tool-third/google-map', [ThirdToolPage::class, '__getGoogleMapAddress'])->middleware('auth');

$router->get('/dashboard/tool-third/facebook-chat-messenger', [ThirdToolPage::class, '__getFacebookChatMessenger'])->middleware('auth');

$router->post('/dashboard/tool-third/update/by-switch-case', [ThirdToolPage::class, '__postUpdateThirdToolPlugins'])->middleware('auth');

/**
 * -----------------------------------------------------------API-----------------------------------------------------------
 */
$router->get('/api/majors-by-id/{id}', [MajorsPage::class, '__getMajorsById']);
/**
 * -------------------ERROR Plugin-------------------
 */
$router->get('/error-status/404-error', [ERRORPage::class, '__get404Page']);
$router->get('/error-status/500-error', [ERRORPage::class, '__get500Page']);

