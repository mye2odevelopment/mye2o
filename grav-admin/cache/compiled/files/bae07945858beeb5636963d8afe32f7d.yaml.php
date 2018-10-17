<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/mye2o/grav-admin/user/plugins/email/email.yaml',
    'modified' => 1539000189,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'from_name' => NULL,
        'to' => NULL,
        'to_name' => NULL,
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
