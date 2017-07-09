<?php

namespace backend\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
\Yii::$app->set('user', [
        'class' => 'yii\web\User',
		'identityClass' => 'frontend\models\Customer',
        'enableAutoLogin' => true,
        'loginUrl' => ['admin/default/login'],
		'identityCookie' => [
        'name' => '_customer', // unique for backend
        'path'=>'/frontend/web'  // correct path for the backend app.
		],
		'idParam' => 'id', //this is important !
    ]);
        // custom initialization code goes here
    }
}
