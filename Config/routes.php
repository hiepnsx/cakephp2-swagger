<?php

Router::connect(
    '/json',
    [
        'plugin' => 'CakePHP2Swagger',
        'controller' => 'Swagger',
        'action' => 'json'
    ]
);

Router::connect(
    '/specs',
    [
        'plugin' => 'CakePHP2Swagger',
        'controller' => 'Swagger',
        'action' => 'specs'
    ]
);
