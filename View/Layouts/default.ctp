<?php
App::uses('Configure', 'Core');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <title><?= Configure::read('Swagger.ui.title') ?></title>
    <?= $this->Html->css([
        'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700',
        'CakePHP2Swagger./assets/swagger-ui.css'
    ]) ?>
    <?= $this->Html->meta(
        'favicon.ico',
        'CakePHP2Swagger./assets/favicon-32x32.png',
        ['type' => 'icon', 'sizes' => '32x32']
    );
    ?>
    <?= $this->Html->meta(
        'favicon.ico',
        'CakePHP2Swagger./assets/favicon-16x16.png',
        ['type' => 'icon', 'sizes' => '16x16']
    );
    ?>
    <?= $this->fetch('css') ?>
    <style>
        html {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            margin: 0;
            background: #fafafa;
        }
    </style>
</head>

<body>
    <?= $this->fetch('content') ?>
    <?= $this->Html->script([
        'CakePHP2Swagger./assets/swagger-ui-bundle.js',
        'CakePHP2Swagger./assets/swagger-ui-standalone-preset.js'
    ]) ?>
    <?= $this->fetch('script') ?>
</body>

</html>
