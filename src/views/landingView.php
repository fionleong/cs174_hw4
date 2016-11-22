<?php

namespace fion_madhuri\Hw4\views;

use fion_madhuri\Hw4\views\elements as E;

require_once('View.php');

class landingView extends View {
  public function render($data) {
    ?>
    <!DOCTYPE><HTML>
    <html>
    <head>
        <title>PasteChart</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./src/styles/styles.css">
    </head>
    <body>
        <div class="landing">
        <?php
        require_once("elements/landingViewElement.php");
        $render = new E\landingViewElement();
        $render->render($data);
        ?>
      </div>
    </body>
    </html>
    <?php
    }
}