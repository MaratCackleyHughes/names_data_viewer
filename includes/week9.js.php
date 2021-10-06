<?php
header('Content-Type:text/javascript');
?>

function mainClicked() {
  var display = document.getElementById('display');
  display.innerText = "Got Click!";
}
