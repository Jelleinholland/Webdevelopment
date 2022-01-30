<?php
require __DIR__ . '/../services/loginservice.php';

class LoginController
{
    private $loginservice;

    function __construct()
    {
        $this->loginservice = new Loginservice();
    }

    public function index()
    {
        require __DIR__ . '/../views/login/index.php';
    }

    public function login()
    {
        if(isset($_POST['submit'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            
            
            $amountrows = $this->loginservice->AttemptToLogin($Username, $Password);

            if($amountrows > 0){
                $_SESSION['Username'] = $Username;
                header('Location: /');
            }else { 
                header('location: /login?error=failed-to-login');
            }
        }
    }
}
