<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/sterli00/devuserlab.com/www/user/plugins/metrika/blueprints.yaml',
    'modified' => 1471852796,
    'data' => [
        'name' => 'Yandex Metrika',
        'version' => '1.0.0',
        'description' => 'Yandex Metrika plugin allows you easily add metrika tracker to your grav website',
        'icon' => 'yahoo',
        'author' => [
            'name' => 'Al Ganiev',
            'email' => 'helios.ag@gmail.com'
        ],
        'homepage' => 'https://github.com/helios-ag/grav-metrika',
        'keywords' => 'yandex, plugin, tracking, metrika, analytics',
        'bugs' => 'https://github.com/helios-ag/grav-metrika/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'hash' => [
                    'type' => 'toggle',
                    'label' => 'Adress Hash',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'webvisor' => [
                    'type' => 'toggle',
                    'label' => 'Enable WebVisor',
                    'hightlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'id' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Tracking ID',
                    'placeholder' => '123456...',
                    'help' => 'Yandex Metrika ID.'
                ]
            ]
        ]
    ]
];
