<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'McWiki',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'index',
    'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',
        'user' => [
            // here is the config for user
        ],
    ],
    'aliases' =>[
        '@components'       => '@app/components',
        '@cwidget'          => '@components/widgets',
    ],
    'components' => [   
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '8Lgdwpvb8vHVM7z0iKWXkBrMyJWbIgIM',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'assignmentTable' => 'auth_assignment',
            'itemChildTable' => 'auth_item_child',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules'=>[
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'components\auth\User',
            'identityClass' => 'components\auth\Identity',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'system/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'assetManager' => [
            'bundles'=>[
                'yii\web\JqueryAsset'=>[
                    'jsOptions'=>[
                        'position'=>\yii\web\View::POS_HEAD,
                    ]
                ],
                'yii\bootstrap\BootstrapPluginAsset'=>[
                    'jsOptions'=>[
                        'position'=>\yii\web\View::POS_HEAD,
                    ]
                ]
            ]
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'model'      => ['class' => 'components\giiPlus\generators\model\Generator'],
            'controller' => ['class' => 'components\giiPlus\generators\controller\Generator'],
        ]
    ];
}

return $config;
