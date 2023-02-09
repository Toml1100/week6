<?php

//Controller for the Application Project

//Turn on error reporting (This turns on error reporting for every page. because everything has to go through the model (this page))
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();
//Java Equivalent === Base f3 = new Base()


//Define a default root
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat-free
$f3->run();