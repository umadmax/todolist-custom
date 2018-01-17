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
          <!-- Create a filter button for each filter in the array -->
          <?php foreach($filters as $index => $label): ?>
              <!-- If there is no filter in $_SESSION, set All active -->
              <?php if(!isset($_SESSION['filter']) && $index === 0): ?>
                  <a href="index.php?filter=<?= strtolower($label) ?>" class="item active"><?= $label ?></a>
              <!-- If there is a filter in $_SESSION, set the matching button active -->
              <?php elseif(isset($_SESSION['filter']) && $_SESSION['filter'] === strtolower($label)): ?>
                  <a href="index.php?filter=<?= strtolower($label) ?>" class="item active"><?= $label ?></a>
              <!-- Create remaining buttons -->
              <?php else: ?>
                  <a href="index.php?filter=<?= strtolower($label) ?>" class="item"><?= $label ?></a>
              <?php endif; ?>
          <?php endforeach; ?>
      </nav>

      <nav class="filters">
        <!-- If there is a category filter in $_SESSION -->
        <?php if(isset($_SESSION['category'])): ?>
          <!-- Create the All button. If the category is All, set it to active -->
          <a href="index.php?category=All" class="item <?= ($_SESSION['category'] === 'All' ? 'active' : '') ?>">All</a>
          <!-- Create buttons for each category -->
          <?php foreach($categories as $index => $cat): ?>
            <!-- If the category match the filter -->
            <?php if($_SESSION['category'] === $cat): ?>
                <!-- Set the button active -->
                <a href="index.php?category=<?= $cat ?>" class="item <?= ($_SESSION['category'] === $cat ? 'active' : '') ?> task-<?= strtolower($cat) ?>"><?= $cat ?></a>
            <?php else: ?>
                <!-- Create remaining category buttons -->
                <a href="index.php?category=<?= $cat ?>" class="item task-<?= strtolower($cat) ?>"><?= $cat ?></a>
            <?php endif; ?>
          <?php endforeach; ?>
        <!-- If category filter is not set -->
        <?php else: ?>
          <!-- Create All button -->
          <a href="index.php?category=All" class="item active">All</a>
          <!-- Create buttons for each category, with matching CSS classes -->
          <?php foreach($categories as $index => $cat): ?>
                <a href="index.php?category=<?= $cat ?>" class="item task-<?= strtolower($cat) ?>"><?= $cat ?></a>
          <?php endforeach; ?>
        <?php endif; ?>
      </nav>
    </header>
    <main>
