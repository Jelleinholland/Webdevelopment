<?php
class SwitchRouter {
    public function route($uri) {

        $uri = $this->stripParameters($uri);

        switch($uri) {
            case '': 
            case 'home': 
            case 'home/index': 
                require __DIR__ . '/controllers/homecontroller.php';
                $controller = new HomeController();
                $controller->index();
                break;
               
            case 'home/about': 
                    require __DIR__ . '/controllers/homecontroller.php';
                    $controller = new HomeController();
                    $controller->about();
                    break;
            case 'login': 
                    require __DIR__ . '/controllers/logincontroller.php';
                    $controller = new LoginController();
                    $controller->login();

            case 'addingarticle': 
                    require __DIR__ . '/controllers/articlecontroller.php';
                    $controller = new ArticleController();
                    $controller->Addingarticles();
                    break;

            default: 
            http_response_code(404);
            break;
        }

    }

    private function stripParameters($uri) {
        if(str_contains($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        return $uri;
    }
}