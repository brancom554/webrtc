<?php

    use thecodeisbae\Accumulator\Accumulator;/** The class responsible of storing and passing data to view **/
    use thecodeisbae\Viewing\View as View;/** The view rendering class **/
    use thecodeisbae\FileManager\FileManager;/** The class responsible of interacting with file manager **/
    use thecodeisbae\Validator\Validator;/** The class responsible of validating some form elements **/
    use thecodeisbae\Mailer\Mailer;/** The class responsible of sending emails **/
    use thecodeisbae\Model\User;

    include_once(_MODELS_PATH.'User.php');

    final class LoginController
    {
        static public $uri;
        static public $params;
        static public $method;

        static function index()
        {
            return View::render('login');
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
                }else{
                    echo "false||Invalid credentials";
                    exit;
                }
            }
            
            echo "false||Your email address is not found";
            exit;
        }

        
    }

    LoginController::$uri = $main_segment;
    LoginController::$method = $method;
    LoginController::$params = $params;

    switch($function)
    {
        case 'index':
            LoginController::index(); 
        break;


        case 'login':
            LoginController::login();    
        break;
    }

