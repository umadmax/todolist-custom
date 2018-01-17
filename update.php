<?php

session_start();

// Get the task ID
$id = $_GET['id'];

// If the edit form has been posted
if($_POST['update'] === 'yes') {
  foreach($_SESSION['tasks'] as $index => $task) {
    // Check if the ID exists
    if($task['id'] == $id) {
      // Change task title with posted value
      $_SESSION['tasks'][$index]['title'] = $_POST['title'];
    }
  }
}
// If the add form has been posted
else {
  // Add the new task to $_SESSION
  array_push($_SESSION['tasks'], addTask());
}

// Get back to index.php afterwards
header('Location:index.php');

function addTask() {
  // Create a new task array with posted values
  $newTask = [
    // Increment index based on $_SESSION['tasks'] length
    'id' => count($_SESSION['tasks']) + 1,
    'title' => $_POST['newTitle'],
    'category' => strtolower($_POST['category']),
    'done' => false
  ];
  return $newTask;
}

?>
