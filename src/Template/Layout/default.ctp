<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?php $sbAdmin = 'sb-admin-2-1.0.7'; ?>
        <?php $sbAdmin = '../' . $sbAdmin  . '/'; ?>

        <?= $this->Html->css($sbAdmin . 'bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
        <?= $this->Html->css($sbAdmin . 'bower_components/metisMenu/dist/metisMenu.min.css') ?>
        <?= $this->Html->css($sbAdmin . 'bower_components/morrisjs/morris.css') ?>
        <?= $this->Html->css($sbAdmin . 'bower_components/font-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css($sbAdmin . 'dist/css/timeline.css') ?>
        <?= $this->Html->css($sbAdmin . 'dist/css/sb-admin-2.css') ?>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <?= $this->Html->script($sbAdmin . 'bower_components/jquery/dist/jquery.min.js'); ?>
        <?= $this->Html->script($sbAdmin . 'bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>
        <?= $this->Html->script($sbAdmin . 'bower_components/metisMenu/dist/metisMenu.min.js'); ?>
        <?= $this->Html->script($sbAdmin . 'bower_components/raphael/raphael-min.js'); ?>
        <?= $this->Html->script($sbAdmin . 'bower_components/morrisjs/morris.min.js'); ?>
        <?= $this->Html->script($sbAdmin . 'dist/js/sb-admin-2.js'); ?>
        <?= $this->Html->script('../js/common.js'); ?>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?= $this->element('../Layout/Includes/Default/header');?>
                <?= $this->element('../Layout/Includes/Default/left-menu');?>
            </nav>
            <div id="page-wrapper">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </body>
</html>
