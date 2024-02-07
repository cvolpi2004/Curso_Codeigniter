<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo esc($title ?? 'Blog com Codeigniter 4!!!') ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/favicon.ico')?>" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('css/styles.css')?>" rel="stylesheet" />

        <?php echo base_url();?>
    </head>
<body>
        <?= $this->include('partials/nav') ?>
        <?= $this->include('partials/header') ?>
    <main id="main">
        <p><?= $this->renderSection('content') ?></p>
    </main>
        <?= $this->include('partials/footer') ?>
</body>
</html>
