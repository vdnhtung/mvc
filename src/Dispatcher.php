<?php

namespace MVC\src;

use MVC\src\Router;

class Dispatcher
{
    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request); 
        $controller = $this->loadController();
        // gọi 1 hàm mà ko biết trước tên
        // call_user_func (mảng ($ obj, $ func), $ params)
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = ucfirst($this->request->controller) . "Controller"; //$name = TasksController
        // $file = ROOT . 'Controllers/' . $name . '.php'; //đúng
        $file = "MVC\\src\\Controllers\\" . $name; // cấu trúc psr-4

        $controller = new $file(); //$file = MVC\\src\\Controllers\\TasksController -> tạo 1 đối tượng TasksController
        return $controller;
    }

}
