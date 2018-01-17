<?php

session_start();

// Get the task ID
$id = $_GET['id'];

foreach($_SESSION['tasks'] as $index => $task) {
  // Check if the ID exists
  if($task['id'] == $id) {
    // If it is, delete task from $_SESSION['tasks]
    unset($_SESSION['tasks'][$index]);
  }
}

// Get back to index.php afterwards
header('Location:index.php');

?>
