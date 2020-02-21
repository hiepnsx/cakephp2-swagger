<?php

Router::connect(
    '/docs',
    [
        'plugin' => 'Swagger',
        'controller' => 'Swagger',
        'action' => 'genDocs'
    ]
);

Router::connect(
    '/docs/:resource',
    [
        'plugin' => 'Swagger',
        'controller' => 'Swagger',
        'action' => 'genDocs'
    ],
    [
        'pass' => [
            'resource'
        ]
    ]
);
