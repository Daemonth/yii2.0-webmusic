<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        /*'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,*/
        'options' => [
            'class' => 'headerv3',
        ],
    ]);
    $leftMenus = [
        ['label' => '好友圈', 'url' => ['/site/community']],
        ['label' => '发现', 'url' => ['/site/index']],
        ['label' => '频道', 'url' => ['/channel/index']],
        ['label' => '注册', 'url' => ['/site/signup']],
    ];
    if (Yii::$app->user->isGuest) {
        $rightMenus[]=[
         'label'=>'<div class="headerv3-search"><input type="text" placeholder="搜索内容"> <!----> <!----></div>'];
        $rightMenus[] = ['label'=>'<div class="headerv3-upload-audio">上传作品</div>','url'=>['/site/login']];
        $rightMenus[] = ['label'=>'<div class="headerv3-login">登录</div>','url'=>['/site/login']];
    } else {
       /* $rightMenus[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';*/
        $rightMenus[]=[
         'label'=>'<div class="headerv3-search"><input type="text" placeholder="搜索内容"> <!----> <!----></div>'];
        $rightMenus[] = ['label'=>'<div class="headerv3-upload-audio">上传作品</div>','url'=>['/site/upload']];
        $rightMenus[] = ['label'=>'<img src="'.Yii::$app->homeUrl.'uploads/'.Yii::$app->user->identity->useimg.'">','url'=>['/user/index']];
        $rightMenus[] = ['label'=>'<div class="headerv3-logout"></div>','url'=>['/site/logout'],'linkOptions'=>['data-method'=>'post']];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $leftMenus,
    ]);
     echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels'=>false,
        'items' => $rightMenus,
    ]);
    NavBar::end();
    ?>

    <div class="container">
     <!--    <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?> -->
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
 </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
