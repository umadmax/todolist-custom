<ul class="tasks">
  <!-- If there is any task to show -->
  <?php if(!empty($tasks)): ?>
    <?php foreach($tasks as $task): ?>
    <!-- Create a li for each task in the array, adding its category to the CSS class -->
    <li class="task-<?= $task['category'] ?> <?=($task['done'] ? 'done' : '')?>">
      <!-- Retrieve task title from array -->
      <span class="item-label"><?= $task['title'] ?></span>
      <!-- Post form values to update.php with the task ID in $_GET -->
      <form class="item-form-edit" action="update.php?id=<?= $task['id'] ?>" method="POST">
          <input class="field item-form-text" type="text" name="title" value="">
          <input type="hidden" name="update" value="yes">
          <button class="field btn success" type="submit">Edit</button>
          <button class="field btn danger" name="">Cancel</button>
      </form>
      <div class="item-actions filters">
        <!-- Send task id to done.php -->
        <a href="done.php?id=<?= $task['id'] ?>" class="item fa fa-check-square"></a>
        <a class="item fa fa-tags"></a>
        <a class="item-edit item fa fa-pencil-square-o"></a>
        <!-- Send task id to delete.php -->
        <a href="delete.php?id=<?= $task['id'] ?>" class="item fa fa-trash danger"></a>
      </div>
    </li>
    <?php endforeach; ?>
  <!-- // If there is no task to show, dummy text -->
  <?php else: ?>
    <p>No task found. Please add one :).</p>
  <?php endif; ?>
</ul>
