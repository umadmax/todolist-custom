<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todolist</title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <h1>Todolist</h1>
      <nav class="filters">
          <?php foreach($filters as $index => $label): ?>
              <?php if(!isset($_GET['filter']) && $index === 0): ?>
                  <a href="index.php?filter=<?= strtolower($label) ?>" class="item active"><?= $label ?></a>
              <?php elseif(isset($_GET['filter']) && $_GET['filter'] === strtolower($label)): ?>
                  <a href="index.php?filter=<?= strtolower($label) ?>" class="item active"><?= $label ?></a>
              <?php else: ?>
                  <a href="index.php?filter=<?= strtolower($label) ?>" class="item"><?= $label ?></a>
              <?php endif; ?>
          <?php endforeach; ?>
      </nav>
      <nav class="filters">
        <?php foreach($categories as $index => $cat): ?>
          <?php if(!isset($_GET['category']) && $index === 0): ?>
              <a href="index.php?category=<?= $cat ?>" class="item active task-<?= strtolower($cat) ?>"><?= $cat ?></a>
          <?php elseif(isset($_GET['category']) && $_GET['category'] === $cat): ?>
              <a href="index.php?category=<?= $cat ?>" class="item active task-<?= strtolower($cat) ?>"><?= $cat ?></a>
          <?php else: ?>
              <a href="index.php?category=<?= $cat ?>" class="item task-<?= strtolower($cat) ?>"><?= $cat ?></a>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
    </header>
    <main>
