<?php

Router::connect(
    '/specs',
    [
        'plugin' => 'CakePHP2Swagger',
        'controller' => 'Swagger',
        'action' => 'specs'
    ]
);

Router::connect(
    '/json',
    [
        'plugin' => 'CakePHP2Swagger',
        'controller' => 'Swagger',
        'action' => 'json'
    ]
);
