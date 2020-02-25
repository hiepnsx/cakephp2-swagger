<?php

$swaggerConfig = 'swagger';
$configPath = APP . 'Config' . DS . $swaggerConfig . '.php';
if (file_exists($configPath)) {
	Configure::load($swaggerConfig, 'default');
}
