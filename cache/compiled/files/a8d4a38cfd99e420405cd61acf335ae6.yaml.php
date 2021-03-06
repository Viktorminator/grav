<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/sterli00/devuserlab.com/www/user/plugins/materializer/blueprints.yaml',
    'modified' => 1471503414,
    'data' => [
        'name' => 'Materializer',
        'version' => '1.7.0',
        'description' => 'Loads the Materialize Framework assets for any plug-in and/or theme that needs it',
        'icon' => 'google',
        'author' => [
            'name' => 'Bob Rockefeller',
            'email' => 'bob@bobrockefeller.com',
            'url' => 'http://www.bobrockefeller.com'
        ],
        'homepage' => 'https://github.com/bobrocke/grav-plugin-materializer',
        'demo' => 'http://materialize.bobrockefeller.com/',
        'keywords' => 'materialize, css, plugin, framework, material design',
        'bugs' => 'https://github.com/bobrocke/grav-plugin-materializer/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'always_load' => [
                    'type' => 'toggle',
                    'label' => 'Always Load',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'load_css' => [
                    'type' => 'toggle',
                    'label' => 'Load Materialize CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'load_js' => [
                    'type' => 'toggle',
                    'label' => 'Load Materialize JS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
