<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
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

";  
$this->registerCss($cssString); 
?>
<div class="site-login">
    <div class="login-left">
       
    </div>

      <div class="login-right">
             <div class="tab-title">
                 <span class="on">找回密码</span> 
                 
              </div> 
 
          
           <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请输入邮箱')]) ?>

               <div class="btn-wp">
                  <button type="submit" class="login-btn" name="login-button">下一步</button>
                 
               </div>
            <?php ActiveForm::end(); ?>
          
         </div>
