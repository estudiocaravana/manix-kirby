<?php
return [
    'debug' => true,
    'languages' => true,
    'd4l' => [
        'static_site_generator' => [
            'endpoint' => 'generate-static-site',
            'custom_routes' =>  [[
                'path' => 'carta',
                'page' => 'carta'
            ]],
            // 'base_url' => 'http://localhost:8888'
        ]
    ]
];
