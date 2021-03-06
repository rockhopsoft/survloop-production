<?php
/**
  * routes-core.php registers all the paths used by core Survloop behavior.
  *
  * Survloop - All Our Data Are Belong
  * @package  rockhopsoft/survloop
  * @author  Morgan Lesko <rockhoppers@runbox.com>
  * @since v0.2.5
  */

/**
 * Home Page Routes
 */
Route::post(
    '/',
    $path . 'Survloop@loadPageHome'
);
Route::get(
    '/',
    $path . 'Survloop@loadPageHome'
);
Route::post(
    '/home', 
    $path . 'Survloop@loadPageHome'
);
Route::get( 
    '/home', 
    $path . 'Survloop@loadPageHome'
);

/**
 * Common AJAX/jQuery Requests
 */
Route::get(
    '/search-bar',
    $path . 'Survloop@searchBar'
);
Route::get(
    '/search-results/{treeID}',
    $path . 'Survloop@searchResultsAjax'
);
Route::get(
    '/search-run',
    $path . 'Survloop@searchRun'
);

Route::post(
    '/ajax',
    $path . 'Survloop@ajaxChecks'
);
Route::get(
    '/ajax',
    $path . 'Survloop@ajaxChecks'
);
Route::post(
    '/ajax/{type}',
    $path . 'Survloop@ajaxChecks'
);
Route::get(
    '/ajax/{type}',
    $path . 'Survloop@ajaxChecks'
);
Route::get(
    '/js-load-menu', 
    $path . 'Survloop@jsLoadMenu'
);

/**
 * Survloop Post-Install System Initialization
 */
Route::get(
    '/fresh/creator', 
    $path . 'Admin\\AdminTreeController@freshUser'
);
Route::post(
    '/fresh/database', 
    $path . 'Admin\\AdminTreeController@freshDB'
);
Route::get( 
    '/fresh/database', 
    $path . 'Admin\\AdminTreeController@freshDB'
);
Route::post(
    '/fresh/survey',   
    $path . 'Admin\\AdminTreeController@freshUX'
);
Route::get(
    '/fresh/survey',   
    $path . 'Admin\\AdminTreeController@freshUX'
);


/**
 * Basic User Authentication
 */
/* 
Route::post(
    '/login', [
        'as' => 'login',
        'uses' => $path . 'Auth\\AuthController@postLogin'
    ]
);
Route::get(
    '/login', [
        'as' => 'login', 
        'uses' => $path . 'Auth\\AuthController@getLogin'
    ]
);
Route::post(
    '/register',
    $path . 'Auth\\SurvRegisterController@register'
);
Route::get(
    '/register',
    $path . 'Auth\\AuthController@getRegister'
);
*/
Route::post(
    '/after-login',
    $path . 'Survloop@afterLogin'
);
Route::get(
    '/after-login',
    $path . 'Survloop@afterLogin'
);
Route::get(
    '/logout',
    $path . 'Auth\\AuthController@getLogout'
);
Route::get(
    '/chkEmail',
    $path . 'Survloop@chkEmail'
);

/**
 * Password Reset
 */

Route::get(
    '/password/email', 
    $path . 'Auth\\AuthController@printPassReset'
);
Route::get(
    '/password/email-sent', 
    $path . 'Auth\\AuthController@printPassResetSent'
);
Route::get(
    '/password/reset', 
    $path . 'Auth\\AuthController@printPassReset'
);
Route::post(
    'password/email',
    $path . 'Auth\\ForgotPasswordController@sendResetLinkEmail'
    //'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail'
)->name('password.email');

Route::get(
    'password/reset/{token}', 
    $path . 'Auth\\ResetPasswordController@showResetForm'
    //'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm'
)->name('password.reset');

Route::get(
    'password/reset', 
    $path . 'Auth\\ForgotPasswordController@showLinkRequestForm'
    //'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm'
)->name('password.update');

Route::post(
    'password/reset', 
    $path . 'Auth\\ResetPasswordController@reset'
    //'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset'
)->name('password.update');


/**
 * Survloop Auth Helpers
 */
Route::get(
    '/holdSess',
    $path . 'Survloop@holdSess'
);
Route::get(
    '/restart',
    $path . 'Survloop@restartSess'
);
Route::get(
    '/sessDump',
    $path . 'Survloop@sessDump'
);
Route::get(
    '/test',
    $path . 'SurvRoutes@testHome'
);
Route::get(
    '/time-out',
    $path . 'Survloop@timeOut'
);
Route::get(
    '/survloop-stats.json',
    $path . 'Survloop@getJsonSurvStats'
);

Route::get(
    '/email-confirm/{token}/{tokenB}',
    $path . 'Survloop@processEmailConfirmToken'
);


Route::get(
    '/spinner',
    $path . 'Survloop@spinnerUrl'
);

/**
 * System-Level Client-Side File Delivery
 */
Route::get( 
    '/sys{which}.min.{type}',  
    $path . 'SurvRoutes@getSysFileMin'
);
Route::get( 
    '/sys{which}.{type}',
    $path . 'SurvRoutes@getSysFile'
);
Route::get(
    '/tree-{treeID}.js',
    $path . 'SurvRoutes@getSysTreeJs'
);
Route::get(
    '/sys/dyna/{file}.{type}',
    $path . 'SurvRoutes@getDynaFile'
);
Route::get( 
    '/gen-kml/{kmlfile}.kml',  
    $path . 'SurvRoutes@getKml'
);

/**
 * External Packages
 */
Route::get( 
    '/jquery.min.js',
    $path . 'SurvRoutes@getJquery'
);
Route::get(
    '/jquery-ui.min.{type}',
    $path . 'SurvRoutes@getJqueryUi'
);
Route::get(
    '/bootstrap.min.{type}',
    $path . 'SurvRoutes@getBootstrap'
);

Route::get( 
    '/css/fork-awesome.min.css', 
    $path . 'SurvRoutes@getFontAwesome'
);
Route::get( 
    '/css/fork-awesome.min.css.map', 
    $path . 'SurvRoutes@getFontAwesomeMap'
);

Route::get( 
    '/fonts/{file}',
    $path . 'SurvRoutes@getFont'
);

Route::get( 
    '/summernote.min.js',
    $path . 'SurvRoutes@getSummernoteJs'
);
Route::get(
    '/summernote.css',
    $path . 'SurvRoutes@getSummernoteCss'
);
Route::get(
    '/font/summernote.eot',
    $path . 'SurvRoutes@getSummernoteEot'
);

Route::get( 
    '/Chart.bundle.min.js',   
    $path . 'SurvRoutes@getChartJs'
);
Route::get(
    '/plotly.min.js',
    $path . 'SurvRoutes@getPlotlyJs'
);


Route::get(
    '/img/user/{user}',
    $path . 'SurvRoutes@getProfilePhoto'
);

Route::get(
    '/survloop-libraries/state-flags/{stateFile}.{ext}',
    $path . 'SurvRoutes@getStateFlag'
);

Route::get( 
    '/vendor/rockhopsoft/survloop/src/Public/jquery-ui-1.12.1/images/{file}',
    $path . 'SurvRoutes@catchJqueryUiMappingError'
);

Route::get( 
    'test-route-call',
    $path . 'SurvRoutes@testRouteCall'
);
