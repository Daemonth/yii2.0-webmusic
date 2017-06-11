<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="login-left">
        <div class="logo"></div> 
        <div class="down">
           <a href="https://itunes.apple.com/us/app/echo-hui-sheng+-du-jia3d-yin/id1063969207?l=zh&amp;ls=1&amp;mt=8" class="appstore">app store</a> 
           <a href="https://qn-qn-echo-image-cdn.app-echo.com/android_apk_version_2016_11_04_12_17_43_4231.apk" class="android">android 立刻下载</a>
        </div>
    </div>

      <div class="login-right">
              <div class="tab-title">
                 <span class="on">手机号登录</span> 
                 <span class="">邮箱登录</span>
              </div> 
              <div class="error">
                  <p class="help-block help-block-error">Incorrect username or password.</p>
              </div> 
          
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
              <div class="phone-area">
                 <p class="areacode">+86</p> 
                 <input type="text" placeholder="请输入手机号码" name="LoginForm[username]" class="phone">
             </div> <!----> <!----> 
                  <input type="password" placeholder="请输入密码" class="password" name="LoginForm[password]"> 
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
