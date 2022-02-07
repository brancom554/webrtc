<?php

use thecodeisbae\Routing\Route as Route;

/** Retrieve necessary infos from the request **/
    $_full_url = explode('/',$_SERVER['REQUEST_URI']); 
    $_uri = $_full_url[1];
    $_url = $_SERVER['HTTP_HOST'].$_uri;
    $_method = $_SERVER['REQUEST_METHOD'];
    $_params = array_slice($_full_url,2);
    

/** Handle the uri using the right controller and function **/
switch($_uri)
{
    case '':  
        Route::lead($_uri,$_params,'HomeController','index',$_method);
    break;

    case 'deleteAdd':  
        Route::lead($_uri,$_params,'MainController','deleteAdd',$_method);
    break;

    case 'getStarted':  
        Route::lead($_uri,$_params,'HomeController','getStarted',$_method);
    break;

    case 'saveUser':  
        Route::lead($_uri,$_params,'HomeController','saveUser',$_method);
    break;

    case 'ads':  
        Route::lead($_uri,$_params,'HomeController','ads',$_method);
    break;

    case 'thanks':  
        Route::lead($_uri,$_params,'HomeController','thanks',$_method);
    break;

    case 'addAds':  
        Route::lead($_uri,$_params,'MainController','addAds',$_method);
    break;

    case 'saveAds':  
        Route::lead($_uri,$_params,'MainController','saveAds',$_method);
    break;
    
    case 'admin':  
        Route::lead($_uri,$_params,'MainController','admin',$_method);
    break;
    
    case 'manageAds':  
        Route::lead($_uri,$_params,'MainController','manageAds',$_method);
    break;
    
    case 'submitLoginAjax':  
        Route::lead($_uri,$_params,'MainController','submitLoginAjax',$_method);
    break;

    case 'call':  
        if($_method == 'GET') 
            Route::lead($_uri,$_params,'HomeController','call',$_method);
        if($_method == 'POST') 
            Route::lead($_uri,$_params,'HomeController','callAjax',$_method);
    break;

    case 'login': 
        if($_method == 'GET') 
            Route::lead($_uri,$_params,'LoginController','index',$_method);
        if($_method == 'POST') 
            Route::lead($_uri,$_params,'LoginController','login',$_method);
    break;

    case 'adminLogin': 
        if($_method == 'GET') 
            Route::lead($_uri,$_params,'MainController','index',$_method);
        if($_method == 'POST') 
            Route::lead($_uri,$_params,'MainController','login',$_method);
    break;

    case 'adminHome':
        Route::lead($_uri,$_params,'MainController','index',$_method);
    break;

    default :
        Route::lead($_uri,$_params,'DefautController','error404',$_method);
    break;
}
