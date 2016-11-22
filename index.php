<?php

namespace fion_madhuri\Hw4;

use fion_madhuri\Hw4\controllers as C;

//require_once "vendor/autoload.php";

session_start();

if (!isset($_REQUEST['c']) || $_REQUEST['c'] == 'chart') {
  require_once('./src/controllers/landingViewController.php');
  $mainPg = new C\landingViewController();
  $mainPg->mainCtrl();
}

?>
