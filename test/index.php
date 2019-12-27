<?php
error_reporting(7);

class Route
{
    function startRoute()
    {
        $class_name = 'Mail';
        $method_name = 'showForm';
        $str = $_SERVER["REQUEST_URI"];

        $parts = explode('/', $str,);
        if (!empty($parts[1])) {
            $class_name = $parts[1];
        }

        if (!empty($parts[2])) {
            $method_name = $parts[2];
        }

        $controller_filename = 'Controller_' . $class_name;
        $controller_file = $controller_filename . '.php';
        $controller_path = './mail/controllers/' . "$controller_file";

        if (file_exists($controller_path)) {

            require "./mail/controllers/" . "$controller_file";
            $controller = new $class_name;
            $controller->$method_name();
        }
    }
}

$start = new Route;
$start->startRoute();