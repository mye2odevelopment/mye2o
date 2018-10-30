<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/factoria/carpetagit/mye2o/grav-admin/user/accounts/admin.yaml',
    'modified' => 1540904394,
    'data' => [
        'email' => 'gabrielescano.bcn@gmail.com',
        'fullname' => 'Admin',
        'title' => 'Administrator',
        'state' => 'enabled',
        'access' => [
            'admin' => [
                'super' => 'true',
                'login' => 'true',
                'cache' => 'true',
                'configuration' => 'true',
                'configuration_system' => 'true',
                'configuration_site' => 'true',
                'configuration_media' => 'true',
                'configuration_info' => 'true',
                'settings' => 'true',
                'pages' => 'true',
                'maintenance' => 'true',
                'statistics' => 'true',
                'plugins' => 'true',
                'themes' => 'true',
                'users' => 'true'
            ],
            'site' => [
                'login' => 'true'
            ]
        ],
        'hashed_password' => '$2y$10$d/fd42B52gZ5NpP3uE3AkOe/aA6pMtMgKGcmbaWS/cGAjqRsVoZbS',
        'language' => 'en',
        'twofa_enabled' => false,
        'twofa_secret' => 'JWERABN7HPFJVEYR4N5FJOQAX4LYYI4V'
    ]
];
