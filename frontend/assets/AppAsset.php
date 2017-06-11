<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/site.css',
        'static/css/loginhm.css',
        'static/css/channel.css',
        'static/css/default.css',
        'static/css/carousel.css',
        'static/css/normalize.css',
        'static/css/music.css',
        'static/css/cmusic.css',
        'static/css/upload.css',
        'static/css/user.css',
        'static/css/index.css',
        'static/css/user.css',
        'static/css/community.css',
        'static/css/layout.css',
    ];
    public $js = [
          'static/js/jquery.carousel.js',
          'static/js/jquery-2.2.1.js',
          'static/js/index.js',
          'static/js/mplay.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
 