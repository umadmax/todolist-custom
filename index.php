<?php

  //Set cookies lifetime to a month
  ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);

  session_start();

  require('data.php');
  require('templates/header.php');
  require('templates/content.php');
  require('templates/footer.php');
?>
