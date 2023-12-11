<?php

// How controllers call Views & Models
require_once "./core/BaseController.php";

// Connect Database
require_once "./core/DB.php";


$controllerName = ucfirst($_REQUEST['controller']?? 'Course'). 'Controller';

require_once "./Controllers/${controllerName}.php";
