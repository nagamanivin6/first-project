<?php

namespace app\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
		/*
		if (\Yii::$app->user->isGuest) {
			echo "<pre>";
			print_r(\Yii::$app->user);
		}else
			echo "userrr";
		die;
		*/
	return $this->render('index');
    }
}
