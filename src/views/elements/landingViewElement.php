<?php

namespace fion_madhuri\Hw4\views\elements;

use fion_madhuri\Hw4\views as V;

require_once('Element.php');

class landingViewElement extends Element {
  public function render($data) {
      require_once("./src/views/helpers/landingViewHelper.php");
      $render = new V\helpers\LandingViewHelper();
      $render->render($data);
  }
}

?>
