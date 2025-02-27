<?php

namespace framework;

class Router
{
    protected $routes = [];


    public function registerRoute($method, $uri, $action)
    {
        list($controller, $controllerMethod) = explode('@', $action);
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
        ];
    }

    /**
     * Routes Getter
     *
     * @param string $uri
     *
     * @return void
     */
    public function get($uri, $controller)
    {
        $this->registerRoute('GET', $uri, $controller);
    }

    /**
     * Routes Getter
     *
     * @param string $uri
     *
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->registerRoute('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        $this->registerRoute('DELETE', $uri, $controller);
    }
    public function put($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
    }


    public function route($uri, $method)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        // Check for _method input to simulate DELETE or PUT from POST requests
        if ($requestMethod === 'POST' && isset($_POST['_method'])) {
            $requestMethod = strtoupper($_POST['_method']);
        }
        // Now, check for the matching route
        foreach ($this->routes as $route) {
            // Ensure that you're comparing the correct method and URI
            if ($route['uri'] === $uri && $route['method'] === $requestMethod) {
                // Extract controller and method
                $controller = 'app\\controllers\\' . $route['controller'];
                $controllerMethod = $route['controllerMethod'];

                // Extract id from POST if available
                $id = isset($_POST['id']) ? $_POST['id'] : null;

                // Instantiate the controller and call the method with the id
                $controllerInstance = new $controller();
                $controllerInstance->$controllerMethod($id);  // Pass the id to the method
                return;
            }
        }

        // If no matching route found
        http_response_code(404);
        loadView('errors/404');
    }
}
