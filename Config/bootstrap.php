<?php

if (!Configure::read('swagger')) {
    Configure::write('swagger', [
        'paths' => [
            ROOT . DS . APP_DIR . DS . 'Controller',
            ROOT . DS . APP_DIR . DS . 'Config'
        ]
    ]);
}
