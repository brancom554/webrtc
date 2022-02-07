<?php

    use thecodeisbae\Viewing\View as View;
    use thecodeisbae\Accumulator\Accumulator;
    use thecodeisbae\Model\User;
    use thecodeisbae\Model\Ads;
    use thecodeisbae\FileManager\FileManager;

    include _MODELS_PATH.'User.php';
    include _MODELS_PATH.'Ads.php';

    final class MainController
    {
        static public $uri;
        static public $params;
        static public $method;
        static function index()
        {
            return View::render('admin/index');
        }
        static function addAds()
        {
            return View::render('admin/addAds');
        }    
        static function admin()
        {
            return View::render('admin/login');
        }
           
        static function manageAds()
        {
            $ads = Ads::all();
            Accumulator::init();
            Accumulator::push('ads',$ads);
            return View::render('admin/manageAds',Accumulator::get());
        }    
        static function saveAds()
        {
            $file = FileManager::store('file',_STORAGE_PATH.'files/');
            if($file['savedAs'])
            {
                if(Ads::create([
                    'title'=> $_REQUEST['title'],
                    'location'=> $_REQUEST['location'],
                    'describe'=> $_REQUEST['describe'],
                    'file'=>$file['savedAs']
                ]))
                {
                    echo 'true||Ads added successfully';
                }else{
                    echo 'false||An error occured';
                }
            }
            exit;
        }
        static function login()
        {
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password'];
            $user = User::where('email',$login)->first();
            if($user)
            {
                if(password_verify($password,$user->password))
                {
                    echo "true||Connection successfully";
                    exit;
                }
                else
                {
                    echo "false||Invalid credentials";
                    exit;
                }
            }
            
            echo "false||Your email address is not found";
            exit;
        }   
        static function deleteAdd()
        {
            Ads::destroy(self::$params[0]);
            return redirect('/manageAds');
        }

        static function submitLoginAjax()
        {      
            $login = $_REQUEST['login'];
            $password = $_REQUEST['password'];
            $user = User::where('email',$login)->first();
            if($user)
            {
                if(password_verify($password,$user->password))
                {
                    echo "true||Connection successfully";
                    exit;
                }
                else
                {
                    echo "false||Invalid credentials";
                    exit;
                }
            }
            
            echo "false||Your email address is not found";
            exit;
        }

    }


    MainController::$uri = $main_segment;
    MainController::$method = $method;
    MainController::$params = $params;

    switch($function)
    {
        case "index":
            MainController::index();
            break;

        case "login":
            MainController::login();
            break;

        case "submitLoginAjax":
            MainController::submitLoginAjax();
            break;

        case "addAds":
            MainController::addAds();
            break;


        case "saveAds":
            MainController::saveAds();
            break;

        case "admin":
            MainController::admin();
            break;

        case "manageAds":
            MainController::manageAds();
            break;

        case "deleteAdd":
            MainController::deleteAdd();
            break;

        default:
            break;

    }
