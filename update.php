<?php

session_start();

// Get the task ID
$id = $_GET['id'];

if(isset($_POST)) {

  // If the edit form has been posted
  if($_POST['update'] === 'yes' && isset($_POST['title'])) {
    modifyTask();
  }
  // If the add form has been posted
  else {
    // Add the new task to $_SESSION
    if(isset($_POST['newTitle']) && isset($_POST['category']))
      array_push($_SESSION['tasks'], addTask($_POST['newTitle'], $_POST['category']));
  }

}

// Get back to index.php afterwards
header('Location:index.php');

function addTask($newTitle, $cat) {
  // Create a new task array with posted values
  $newTask = [
    // Increment index based on $_SESSION['tasks'] length
    'id' => count($_SESSION['tasks']) + 1,
    'title' => $newTitle,
    'category' => strtolower($cat),
    'done' => false
  ];
  return $newTask;
}

function modifyTask() {
  global $id;
  foreach($_SESSION['tasks'] as $index => $task) {
    // Check if the ID exists
    if($task['id'] == $id) {
      // Change task title with posted value
      $_SESSION['tasks'][$index]['title'] = $_POST['title'];
    }
  }
}
?>
