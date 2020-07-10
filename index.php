<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use model\ManagerMoral;

require_once "conf/autoload.php";

$comp = new ManagerMoral();
$comp->ListeMoral();
