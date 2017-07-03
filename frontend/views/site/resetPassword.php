<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
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
                 <span class="on">修改密码</span> 
                 
              </div> 
 
             <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                <div class="btn-wp">
                  <button type="submit" class="login-btn" name="login-button">确定修改</button>
                 
             </div> 

            <?php ActiveForm::end(); ?>
          
         </div>
