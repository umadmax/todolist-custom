<?php

session_start();

// Get the task ID
$id = $_GET['id'];

foreach($_SESSION['tasks'] as $index => $task) {
  // Check if the ID exists
  if($task['id'] == $id) {
    // If task is todo
    if(!$task['done'])
      // Check it
      $_SESSION['tasks'][$index]['done'] = true;
    // If it is alreay done
    else {
      // Uncheck it
      $_SESSION['tasks'][$index]['done'] = false;
    }
  }
}

// Get back to index.php afterwards
header('Location:index.php');

?>
