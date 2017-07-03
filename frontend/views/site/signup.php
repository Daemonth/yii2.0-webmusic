<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
$cssString = ".form-control{
    display: block;
    width: 356px;
    border: 2px solid #e8e8e8;
    font-size: 14px;
    height: 45px;
    line-height: 50px;
    padding-left: 10px;
    color: #666;
    margin-bottom: 22px;
    border-radius: 4px;
    -webkit-appearance: none;
    outline: 0;
}
.v-sound-upload .form .tr .td-right .declare-info, .v-sound-upload .form .tr .td-right label {
    display: none;
}
label {
    display: none;
}
.login-right .tab-title {
    margin: 0px 0 8px;
}
";  
$this->registerCss($cssString); 
?>

<div class="site-login">
    <div class="login-left">
       
    </div>

      <div class="login-right">
              <div class="tab-title">
               
                 
              </div> 
 
          
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
          
                 
                   <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请输入用户名')]) ?>
                   <?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请输入邮箱')]) ?>
              <!----> <!----> 
                   <?= $form->field($model, 'password')->passwordInput(['autofocus' => true,'placeholder' => Yii::t('app', '请输入密码')]) ?>
                   <?= $form->field($model, 'repassword')->passwordInput(['autofocus' => true,'placeholder' => Yii::t('app', '请确定密码')]) ?>
                   <?= $form->field($model, 'verifyCode')->widget(Captcha::className()) ?> 

             <div class="btn-wp">
                  <button type="submit" class="login-btn" name="login-button">注册</button>
                 
             </div> 
    <?php ActiveForm::end(); ?>
            
         </div>





              