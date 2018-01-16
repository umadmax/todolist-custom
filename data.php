<?php

$title = 'Todolist';
$filters = ['All', 'Completed', 'Todo'];
$categories = ['Work', 'Gaming', 'Cart', 'Perso'];

// Todolist elements
$tasks = [
  [
    'title' => 'Acheter du café',
    'category' => 'cart',
    'done' => true
  ],
  [
    'title' => 'Appeler Philippe',
    'category' => 'work',
    'done' => true
  ],
  [
    'title' => 'Finir Todolist',
    'category' => 'work',
    'done' => false
  ],
  [
    'title' => 'Acheter MHW',
    'category' => 'gaming',
    'done' => false
  ],
  [
    'title' => 'Sortir le chien',
    'category' => 'perso',
    'done' => true
  ],
  [
    'title' => 'Finir Nier:Automata',
    'category' => 'gaming',
    'done' => false
  ],
  [
    'title' => 'Backseat Ludo',
    'category' => 'work',
    'done' => false
  ],
];

// If filter is set in the url
if(isset($_GET['filter'])) {
  if($_GET['filter'] === 'all') {
    // Nothing to do
  }
  elseif($_GET['filter'] === 'completed'){
    // $tasks === array with filtered values returned by the fonction
    $tasks = applyFilter(true);
  }
  elseif($_GET['filter'] === 'todo') {
    // $tasks === array with filtered values returned by the fonction
    $tasks = applyFilter(false);
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

?>
