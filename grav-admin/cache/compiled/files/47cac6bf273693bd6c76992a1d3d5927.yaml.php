<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/factoria/carpetagit/mye2o/grav-admin/user/themes/factorianos/blueprints.yaml',
    'modified' => 1539079830,
    'data' => [
        'name' => 'Factorianos',
        'version' => '0.1.0',
        'description' => 'tema sencillo para e2o',
        'icon' => 'rebel',
        'author' => [
            'name' => 'FactoriaF5',
            'email' => 'gabrielescano.bcn@gmail.com'
        ],
        'homepage' => 'https://github.com/factoria-f5/grav-theme-factorianos',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/factoria-f5/grav-theme-factorianos/issues',
        'readme' => 'https://github.com/factoria-f5/grav-theme-factorianos/blob/develop/README.md',
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
