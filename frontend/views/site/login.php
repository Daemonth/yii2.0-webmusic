<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$cssString = ".form-control{
    display: block;
    width: 356px;
    border: 2px solid #e8e8e8;
    font-size: 14px;
    height: 50px;
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
";  
$this->registerCss($cssString); 
?>
<div class="site-login">
    <div class="login-left">
       
    </div>

      <div class="login-right">
              <div class="tab-title">
                 <span class="on">手机号登录</span> 
                 <span class="">邮箱登录</span>
              </div> 
 
          
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
          
                 
                 <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请输入手机号码')]) ?>
              <!----> <!----> 
                   <?= $form->field($model, 'password')->passwordInput(['autofocus' => true,'placeholder' => Yii::t('app', '请输入密码')]) ?>
                  <div class="btn-wp">
                  <button type="submit" class="login-btn" name="login-button">登录</button>
                  <a href="<?=Url::to(['site/request-password-reset'])?>" class="forget-btn">忘记密码？</a> 
                  <a href="<?=Url::to(['site/signup'])?>" class="reg-btn">立即注册</a>
             </div> 
    <?php ActiveForm::end(); ?>
             <div class="other-login">其他登录方式：
                 <a rel="nofollow" title="使用微博帐号登录" href="/index/open-login?platform=sina" target="_top" class="weibo-btn">微博登录</a> 
                 <a rel="nofollow" title="使用微信帐号登录" href="/index/open-login?platform=wechat" target="_top" class="wechat-btn">微信登录</a>
             </div>
         </div>
