<?php
class Router {
    public function run() {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $params = explode('/', $url);

        $controllerName = ucfirst(array_shift($params)) . 'Controller';
        $controllerFile = "../app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            $method = isset($params[0]) ? array_shift($params) : 'index';

            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method], $params);
            } else {
                echo "Méthode introuvable.";
            }
        } else {
            echo "Page introuvable.";
        }
    }
}
?>
