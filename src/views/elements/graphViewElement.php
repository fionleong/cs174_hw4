<?php

namespace fion_madhuri\Hw4\views\elements;

use fion_madhuri\Hw4\views as V;

require_once('Element.php');

class graphViewElement extends Element {
  public function render($data) {
      require_once("./src/views/helpers/graphViewHelper.php");
      $render = new V\helpers\graphViewHelper();
      $render->render($data);
  }
}

?>
