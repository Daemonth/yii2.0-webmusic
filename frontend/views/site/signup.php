<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
$cssString = ".form-control{
    width: 390px;
    height: 38px;
    border: 1px solid #e8e8e8;
    background: #fff;
    padding: 0 15px;
    font-size: 14px;
    color: #666;
}
";  
$this->registerCss($cssString); 
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', 'Start time')]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'repassword')->passwordInput() ?>

               <?= $form->field($model, 'verifyCode')->widget(Captcha::className()) ?> 

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>



            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>





              