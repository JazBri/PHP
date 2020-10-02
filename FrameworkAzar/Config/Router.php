<?php 
    namespace Config;

    use Config\Request as Request;

    class Router
    {
        public static function Route(Request $request)
        {
            //StudentController
            $controllerName = $request->getcontroller() . 'Controller';

            //GetAll
            $methodName = $request->getmethod();

            //
            $methodParameters = $request->getparameters();          

            //Controllers\StudentController
            $controllerClassName = "Controllers\\". $controllerName;            

            $controller = new $controllerClassName;
            
            if(!isset($methodParameters))            
                call_user_func(array($controller, $methodName));
            else
                call_user_func_array(array($controller, $methodName), $methodParameters);
        }
    }
?>