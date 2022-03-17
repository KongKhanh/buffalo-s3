<?php

/**
 * $baseDir: return base folder
 */
$baseDir = dirname(dirname(__FILE__));

return array(

    /**
     * Support file
     */
    /**-------------Static files-------------*/
    "Support\\Str"                              => $baseDir . '/Support/Str.php',
    "Support\\Arr"                              => $baseDir . '/Support/Arr.php',

    /**
     * Core file
     */
    "Kernel\\App"                               => $baseDir . '/Kernel/App.php',
    "Kernel\\Router"                            => $baseDir . '/Kernel/Router.php',
    "Kernel\\TemplateEngine"                    => $baseDir . '/Kernel/TemplateEngine.php',
    "Kernel\\View"                              => $baseDir . '/Kernel/View.php',
    "Kernel\\Database"                          => $baseDir . '/Kernel/Database.php',
    "Kernel\\Request"                           => $baseDir . '/Kernel/Request.php',
    "Kernel\\Response"                          => $baseDir . '/Kernel/Response.php',
    "Kernel\\CookieCore"                        => $baseDir . '/Kernel/CookieCore.php',
    "Kernel\\SessionCore"                       => $baseDir . '/Kernel/SessionCore.php',
    "Kernel\\Encrypter"                         => $baseDir . '/Kernel/Encrypter.php',

    /**
     * Database
     */
    "Kernel\\Database\\PDO\\Connection"                         => $baseDir . '/Kernel/Database/PDO/Connection.php',

    /**
     * Support file
     */
    /**-------------Dynamic files-------------*/
    "Support\\DB"                               => $baseDir . '/Support/DB.php',
    "Support\\Http\\redirect"                   => $baseDir . '/Support/Http/redirect.php',
    "Support\\Http\\request"                    => $baseDir . '/Support/Http/request.php',
    "Support\\Cookie"                           => $baseDir . '/Support/Cookie.php',
    "Support\\Session"                          => $baseDir . '/Support/Session.php',
    "Support\\Crypt"                            => $baseDir . '/Support/Crypt.php',

    /**
     * Builder file-----------------------------------------------------------------------------------------
     */
    "app\\Http\\Controllers\\Controller"                        => $baseDir . '/app/Http/Controllers/Controller.php',
    "app\\Http\\Controllers\\Helpers\\SingleHelper"             => $baseDir . '/app/Http/Controllers/Helpers/SingleHelper.php',
    /**
     * ---------------------------Client Page
     */
    "app\\Http\\Controllers\\Client\\HomePage"                  => $baseDir . '/app/Http/Controllers/Client/HomePage.php',
    "app\\Http\\Controllers\\Client\\NewsPageClient"            => $baseDir . '/app/Http/Controllers/Client/NewsPageClient.php',
    "app\\Http\\Controllers\\Client\\SiteInfoAPI"               => $baseDir . '/app/Http/Controllers/Client/SiteInfoAPI.php',
    "app\\Http\\Controllers\\Client\\MajorsPageClient"          => $baseDir . '/app/Http/Controllers/Client/MajorsPageClient.php',

    /**
     * ---------------------------Authentication
     */
    "app\\Http\\Middleware\\AuthDashboardLogin"             => $baseDir . '/app/Http/Middleware/AuthDashboardLogin.php',
    "app\\Http\\Controllers\\Auth\\Login"                   => $baseDir . '/app/Http/Controllers/Auth/Login.php',
    "app\\Http\\Controllers\\Auth\\Register"                => $baseDir . '/app/Http/Controllers/Auth/Register.php',

    /**
     * ---------------------------Admin Dashboard
     */
    "app\\Http\\Controllers\\Dashboard\\AnalyticsPage"                  => $baseDir . '/app/Http/Controllers/Dashboard/AnalyticsPage.php',
    "app\\Http\\Controllers\\Dashboard\\SubscriberPage"                 => $baseDir . '/app/Http/Controllers/Dashboard/SubscriberPage.php',
    "app\\Http\\Controllers\\Dashboard\\NewsPage"                       => $baseDir . '/app/Http/Controllers/Dashboard/NewsPage.php',
    "app\\Http\\Controllers\\Dashboard\\ActivityLogsPage"               => $baseDir . '/app/Http/Controllers/Dashboard/ActivityLogsPage.php',
    "app\\Http\\Controllers\\Dashboard\\MajorsPage"                     => $baseDir . '/app/Http/Controllers/Dashboard/MajorsPage.php',
    "app\\Http\\Controllers\\Dashboard\\MenuCatePage"                   => $baseDir . '/app/Http/Controllers/Dashboard/MenuCatePage.php',
    "app\\Http\\Controllers\\Dashboard\\LevelOfTraining"                => $baseDir . '/app/Http/Controllers/Dashboard/LevelOfTraining.php',
    "app\\Http\\Controllers\\Dashboard\\AboutUs"                        => $baseDir . '/app/Http/Controllers/Dashboard/AboutUs.php',
    "app\\Http\\Controllers\\Dashboard\\ThirdToolPage"                  => $baseDir . '/app/Http/Controllers/Dashboard/ThirdToolPage.php',
    "app\\Http\\Controllers\\Dashboard\\VideoIFramePage"                => $baseDir . '/app/Http/Controllers/Dashboard/VideoIFramePage.php',
    "app\\Http\\Controllers\\Base\\ERRORPage"                           => $baseDir . '/app/Http/Controllers/Base/ERRORPage.php',
);