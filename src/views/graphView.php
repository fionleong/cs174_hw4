<?php

namespace fion_madhuri\Hw4\views;

use fion_madhuri\Hw4\views\elements as E;

require_once('View.php');

class graphView extends View {
  public function render($data) {
    ?>
    <!DOCTYPE><HTML>
    <html>
    <head>
        <title> - PasteChart</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./src/styles/styles.css">
    </head>
    <body>
        <div class="graph">
        <?php
        require_once("elements/graphViewElement.php");
        $render = new E\graphViewElement();
        $render->render($data);
        ?>
      </div>
    </body>
    </html>
    <?php
    }
}