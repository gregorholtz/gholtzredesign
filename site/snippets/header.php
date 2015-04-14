<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php echo js('assets/js/app.min.js') ?>

</head>

<body class="<?php echo $page->template() ?>">

  <div id="popup-menu">

    <?php snippet('menu') ?>

    <p class="toggle">X</p>

  </div>

  <div class="outer-container">

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    <p class="toggle">X</p>
  </header>
