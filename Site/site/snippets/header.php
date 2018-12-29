<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- Bootstrap -->
  <?= js('assets/js/bootstrap.min.js') ?>

  <!-- Bootstrap CSS -->
  <?= css('assets/css/bootstrap.min.css') ?>

  <!-- Custom CSS -->
  <?= less('assets/less/style.less'); ?>
  <?= css('assets/css/style.css') ?>

</head>
<body>
  <?php snippet('analytics') ?>

  <header class="header wrap wide" role="banner">
    <div class="grid">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
      </div>

      <?php snippet('menu') ?>

    </div>
  </header>
