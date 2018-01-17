<hr>

<form class="filters item-form-add" action="update.php" method="POST">
  <input class="item form-task" type="text" name="newTitle" placeholder="What to do...">
  <select class="item form-cat" name="category">
    <?php foreach($categories as $cat): ?>
    <!-- For each category, create an option with the category value -->
    <option value="<?= $cat ?>"><?= $cat ?></option>
  <?php endforeach; ?>
  </select>
  <input value="Add task" class="item form-submit success" type="submit">
</form>
