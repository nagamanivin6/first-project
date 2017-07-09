<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
//	'layout'=>'@app/themes/frtheme/main',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',

    'components' => [

        'user' => [
            'identityClass' => 'common\models\User',//'frontend\models\Customer', //'common\models\User',
            'enableAutoLogin' => true,
			'identityCookie' => [
        'name' => '_customer', // unique for backend
        'path'=>'/frontend/web'  // correct path for the backend app.
		],
		'idParam' => 'id', //this is important !
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
         'urlManager' => [
        'class' => 'yii\web\UrlManager',
        // Disable index.php
        'showScriptName' => false,
        // Disable r= routes
        'enablePrettyUrl' => true,
        'rules' => array(
        ),
        ],
		/*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
