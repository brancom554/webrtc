<?php

    use thecodeisbae\Viewing\View as View;
    use thecodeisbae\Accumulator\Accumulator;
    use thecodeisbae\Model\User;
    use Twilio\Rest\Client;
    use thecodeisbae\Model\Ads;


    include _MODELS_PATH.'User.php';
    include _MODELS_PATH.'Ads.php';
    final class HomeController
    {
        static public $uri;
        static public $params;
        static public $method;
        static function index()
        {
            return View::render('index');
        }
        static function getStarted()
        {
            return View::render('start');
        }
        static function saveUser()
        {
            if(User::create([
                'firstname' => $_REQUEST['firstname'],
                'lastname' => $_REQUEST['lastname'],
                'location' => $_REQUEST['location'],
                'sexe' => $_REQUEST['gender'],
                'age' => $_REQUEST['age'],
                'email' => $_REQUEST['email'],
                'password' => password_hash($_REQUEST['password'],PASSWORD_DEFAULT)
            ]))
                echo "true||User saved successfully";
            else
                echo "false||An error occured";
            exit;
        }
        static function thanks()
        {
            return View::render('thanks');
        }
        static function ads()
        {
            $ads = Ads::all()->take('3');
            Accumulator::init();
            Accumulator::push('ads',$ads);
            return View::render('ads',Accumulator::get());
        }
        static function call()
        {
            return View::render('call');
        }
        static function callAjax()
        {
            $sid = 'AC1dec0a3de02eb7ba9859b9535f5d8cf1';
            $token = 'a7ef97f61b63f079349a2e853ab9799d';
            $twilio = new Client($sid, $token);
            
            $call = $twilio->calls
                           ->create($_REQUEST['salesPhone'], // to
                                    "+12564747095", // from
                                    [
                                        "twiml" => "<Response><Say>Ahoy there!</Say></Response>"
                                    ]
                           );
            echo '<pre>Call is going on please wait...</pre>';
            echo '<pre>',print_r($call->sid,1),'</pre>';
            
            // return View::render('call');
        }

    }

    HomeController::$uri = $main_segment;
    HomeController::$method = $method;
    HomeController::$params = $params;
    
    switch($function)
    {    
        case 'index':
            HomeController::index();    
        break;
        
        case 'getStarted':
            HomeController::getStarted();    
        break;

        case 'saveUser':
            HomeController::saveUser();    
        break;

        case 'ads':
            HomeController::ads();    
        break;

        case 'callAjax':
            HomeController::callAjax(); 
        break;
        
        case "thanks":
            HomeController::thanks();
            break;

        case 'call':
            HomeController::call();    
        break;

        default:
            break;
    }
