<?php

  $title = 'Todolist';
  $filters = ['All', 'Completed', 'Todo'];

  function showFilters() {
      global $filters;
      foreach($filters as $index => $label) {
          if($index === 0)
              echo '<a class="active">'.$label.'</a>';
          else {
              echo '<a>'.$label.'</a>';
          }
      }
  }

  require('templates/header.php');
  require('templates/content.php');
  require('templates/footer.php');
?>
