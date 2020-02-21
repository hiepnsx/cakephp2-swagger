<?php

App::uses('Configure', 'Core');

/*
 * Load app-specific configuration file
 */
$config = 'swagger';
$configPath = APP . 'Config' . DS . $config . '.php';
if (file_exists($configPath)) {
	Configure::load($config, 'default');
}


if (!Configure::read('CakePHP2Swagger')) {
    Configure::write('CakePHP2Swagger', [
        'paths' => [
            ROOT . DS . APP_DIR . DS . 'Controller',
            ROOT . DS . APP_DIR . DS . 'Config'
        ]
    ]);
}
