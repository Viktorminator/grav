<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/sterli00/devuserlab.com/www/user/config/site.yaml',
    'modified' => 1471071705,
    'data' => [
        'title' => 'DevUserLab',
        'author' => [
            'name' => 'Viktor Matushevskyi',
            'email' => 'viktorminator@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'PHP, MeteorJS, ReactJS, AngularJS уроки, разработка сайтов и мобильных приложений'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
