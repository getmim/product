<?php

return [
    '__name' => 'product',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-user' => NULL
            ],
            [
                'lib-enum' => NULL 
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Product\\Model' => [
                'type' => 'file',
                'base' => 'modules/product/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'product.status' => ['Deleted', 'Draft', 'Published']
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'cover' => [
                    'type' => 'std-cover'
                ],
                'gallery' => [
                    'type' => 'json'
                ],
                'price' => [
                    'type' => 'json'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'product.status',
                    'vtype' => 'int'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];