<?php

// Page title
$title = 'Todolist';

// Filters array
$filters = ['All', 'Completed', 'Todo'];

// Categories array
$categories = ['Work', 'Gaming', 'Cart', 'Misc'];

// If tasks array has not been added to $_SESSION
if(!isset($_SESSION['tasks'])) {

  // Set the task array
  $_SESSION['tasks'] = [
    [
      'id' => 1,
      'title' => 'Acheter du café',
      'category' => 'cart',
      'done' => true
    ],
    [
      'id' => 2,
      'title' => 'Appeler Philippe',
      'category' => 'work',
      'done' => true
    ],
    [
      'id' => 3,
      'title' => 'Finir Todolist',
      'category' => 'work',
      'done' => false
    ],
    [
      'id' => 4,
      'title' => 'Acheter MHW',
      'category' => 'gaming',
      'done' => false
    ],
    [
      'id' => 5,
      'title' => 'Sortir le chien',
      'category' => 'misc',
      'done' => true
    ],
    [
      'id' => 6,
      'title' => 'Finir Nier:Automata',
      'category' => 'gaming',
      'done' => false
    ],
    [
      'id' => 7,
      'title' => 'Backseat Ludo',
      'category' => 'work',
      'done' => false
    ],
  ];

}

// Set a intermediary variable with session's array values
$tasks = $_SESSION['tasks'];

// If filter is set in the url or in $_SESSION
if(isset($_GET['filter']) || isset($_SESSION['filter'])) {

  // Define a intermediary variable
  $filter = null;

  // If filter is set in the url
  if(isset($_GET['filter'])) {
    // Set $filter
    $filter = $_GET['filter'];
    // Copy filter to $_SESSION
    $_SESSION['filter'] = $_GET['filter'];
  }
  // If filter is not set in the URL, set $filter with $_SESSION filter value
  else $filter = $_SESSION['filter'];

  if($filter === 'all') {
    // Nothing to do
  }
  elseif($filter === 'completed'){
    // $tasks === array with filtered values returned by the fonction
    $tasks = applyFilter(true);
  }
  elseif($filter === 'todo') {
    // $tasks === array with filtered values returned by the fonction
    $tasks = applyFilter(false);
  }
}

// If category is set in the url or in $_SESSION
if(isset($_GET['category']) || isset($_SESSION['category'])) {

  // Define a intermediary variable
  $catFilter = null;

  // If category is set in the url
  if(isset($_GET['category'])) {
    // Set $catFilter
    $catFilter = $_GET['category'];
    // Copy category to $_SESSION
    $_SESSION['category'] = $_GET['category'];
  }
  // If category is not set in the URL, set $catFilter with $_SESSION category value
  else $catFilter = $_SESSION['category'];

  if($catFilter === 'All') {
    unset($_SESSION['category']);
  }
  else {
    foreach($categories as $category) {
      // Filter tasks with given category
      if($catFilter === $category){
        $tasks = applyCategory($category);
      }
    }
  }
}

function applyFilter($isDone) {
  // Retrieve $tasks in this scope
  global $tasks;
  $results = [];

  foreach($tasks as $task) {
      // If the parameter === bool of the task
      if($task['done'] === $isDone)
        // Add the task in $results
        array_push($results, $task);
  }
  // Return only filtered tasks
  return $results;
}

function applyCategory($cat) {
  // Retrieve $tasks in this scope
  global $tasks;
  $results = [];

  foreach($tasks as $task) {
    // If the parameter === task category
    if($task['category'] === strtolower($cat))
      // Add the task in $results
      array_push($results, $task);
  }
  // Return only filtered tasks
  return $results;
}

?>
