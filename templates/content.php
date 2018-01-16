<ul class="tasks">
  <?php foreach($tasks as $task): ?>
  <li class="task-<?= $task['category'] ?> <?=($task['done'] ? 'done' : '')?>">
    <span class="item-label"><?= $task['title'] ?></span>
    <form class="item-form-edit" action="">
        <input class="field item-form-text" type="text" name="" value="">
        <button class="field btn success" type="submit" name="">Edit</button>
        <button class="field btn danger" name="">Cancel</button>
    </form>
    <div class=".item-actions filters">
      <a class="item fa fa-check-square"></a>
      <a class="item fa fa-tags"></a>
      <a class="item-edit item fa fa-pencil-square-o"></a>
      <a class="item fa fa-trash danger"></a>
    </div>
  </li>
  <?php endforeach; ?>
  <!-- <li class="task-work">
    <span class="item-label">What to do</span>
    <div class=".item-actions filters">
      <a class="item fa fa-check-square success"></a>
      <a class="item fa fa-tags"></a>
      <a class="item-edit item fa fa-pencil-square-o"></a>
      <a class="item fa fa-trash danger"></a>
    </div>
  </li>
  <li class="task-work">
    <span class="item-label">What to do</span>
    <div class=".item-actions filters">
      <a class="item fa fa-check-square success"></a>
      <a class="item fa fa-tags"></a>
      <a class="item-edit item fa fa-pencil-square-o"></a>
      <a class="item fa fa-trash danger"></a>
    </div>
  </li>
  <li class="task-perso">
    <span class="item-label">What to do</span>
    <div class=".item-actions filters">
      <a class="item fa fa-check-square success"></a>
      <a class="item fa fa-tags"></a>
      <a class="item-edit item fa fa-pencil-square-o"></a>
      <a class="item fa fa-trash danger"></a>
    </div>
  </li> -->
</ul>
