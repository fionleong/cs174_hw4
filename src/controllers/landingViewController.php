<?php

namespace fion_madhuri\Hw4\controllers;

use fion_madhuri\Hw4 as Q;

require_once('Controller.php');

class landingViewController extends Controller {
  public function mainCtrl() {

    require_once('./src/views/landingView.php');
    $viewRender = new Q\views\landingView();
    $viewRender->render(null);
  }

}
