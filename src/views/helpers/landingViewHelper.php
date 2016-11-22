<?php

namespace fion_madhuri\Hw4\views\helpers;

require_once("Helper.php");

class landingViewHelper extends Helper {
  public function render($data) {
    ?>
    <h1>PasteChart</h1>
    <h3>Share your data in charts!</h3>
    <form action="./index.php?" method="post">
      <input type="hidden" name="c" value="chart"/>
      <input type="hidden" name="a" value="show"/>
      <label for="chartTitle">Chart Title: </label><br>
      <input type="text" name="chartTitle" id="chartTitle" size="48"/><br></br>
      <label for="data">Data: </label><br>
      <textarea name="data" id="data" rows="10" cols="50" placeholder="The first coordinate should represent a text label (can involve numbers but can't involve a comma), the remaining coordinates should represent values that correspond to that text label from up to 5 sources. Example: Jan,50,12,7.1,8,94"></textarea><br></br>
      <button type="submit" onclick="return ">Share</button>
    </form>
    <script src="chart.js"></script>
    <script>
    
    </script>
    <?php
  }
}