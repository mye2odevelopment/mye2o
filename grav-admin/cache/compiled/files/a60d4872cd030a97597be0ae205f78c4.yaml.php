<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/mye2o/grav-admin/user/themes/mye2o-theme/blueprints.yaml',
    'modified' => 1539009443,
    'data' => [
        'name' => 'Mye2o Theme',
        'version' => '0.1.0',
        'description' => 'cool theme for mye2o',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Ruben-Santos_Gabriele',
            'email' => 'mye2oproyecto@gmail.com'
        ],
        'homepage' => 'https://github.com/ruben-santos-gabriele/grav-theme-mye2o-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/ruben-santos-gabriele/grav-theme-mye2o-theme/issues',
        'readme' => 'https://github.com/ruben-santos-gabriele/grav-theme-mye2o-theme/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
