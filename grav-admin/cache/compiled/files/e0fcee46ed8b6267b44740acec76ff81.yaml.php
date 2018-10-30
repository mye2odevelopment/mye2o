<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/factoria/carpetagit/mye2o/grav-admin/system/config/site.yaml',
    'modified' => 1540902823,
    'data' => [
        'title' => 'MYE2O',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Escuelas de Segunda Oportunidad',
            'email' => 'mye2odevelopment@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Plataforma de Buenas Practicas de las Escuelas de Segunda Oportunidad'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
