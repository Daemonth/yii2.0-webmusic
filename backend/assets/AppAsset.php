<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/bootstrap.min.css',
        'static/css/bootstrap-responsive.min.css',
        'static/css/font-awesome.min.css',
        'static/css/style-metro.css',
        'static/css/style.css',
        'static/css/style-responsive.css',
        'static/css/default.css',
        'static/css/uniform.default.css',
        'static/css/site.css',
        'static/css/admin.css',
    ];
    public $js = [
    'static/js/jquery-1.8.3.min.js',
    'static/js/bootstrap.min.js',
    'static/js/jquery-migrate-1.2.1.min.js',
    'static/js/jquery-ui-1.10.1.custom.min.js',
    'static/js/jquery.slimscroll.min.js',
    'static/js/jquery.blockui.min.js',
    'static/js/jquery.cookie.min.js',
    'static/js/jquery.uniform.min.js',
    'static/js/app.js',
    'static/js/table_base.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
