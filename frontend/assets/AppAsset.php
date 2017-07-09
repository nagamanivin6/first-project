<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
		'css/bootstrap.min.css',
		'css/font-awesome.min.css',
		'css/owl.carousel.css',
		'css/animate.css',
		'css/main.css',
		'css/responsive.css',
    ];
	
    public $js = [
	'js/vendor/modernizr-2.6.2.min.js',
//	'js/vendor/jquery-1.10.2.min.js',
	'js/jquery.lwtCountdown-1.0.js',
	'js/bootstrap.min.js',
	'js/owl.carousel.min.js',
	'js/jquery.validate.min.js',
	'js/jquery.form.js',
	'js/jquery.nav.js',
	'js/jquery.sticky.js',
	'js/plugins.js',
	'js/wow.min.js',
	'js/main.js',
	
    ];
	
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
