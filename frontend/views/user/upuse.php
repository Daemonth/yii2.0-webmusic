<?php
use yii\widgets\ActiveForm;
$cssString = ".form-control{
    width: 422px;
    height: 38px;
    border: 1px solid #e8e8e8;
    background: #fff;
    padding: 0 15px;
    font-size: 14px;
    color: #666;
    border-radius: 3px;
    resize: none;
    font-size: 14px;
    line-height: 1.5;
  
}
.v-sound-upload .form .tr .td-right .declare-info, .v-sound-upload .form .tr .td-right label {
    display: none;
}
label {
    display: none;
}
.bottom .form-control{
    height:100px;
}
.help-block {
    position: absolute;
    left: 100px;
    bottom: -19px;
    color: #6ed56c;
    font-size: 12px;
    line-height: 12px;
    margin-top: 6px;
}
";  
$this->registerCss($cssString); 
?>

<main class="main-center100">
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
	<div class="user-edit">
		<h2>编辑个人资料</h2> 
		<div class="edit-info">
			<div class="common-line spe clearfix"><p>头像</p> 
				<div class="upload-area fl"><!----> 
					
					
					<div class="upload-status">
						
						 <input type="file" capture="camera" name="UserForm[imageFile]" class="webuploader-element-invisible" multiple="multiple" accept="" style="opacity: 0; width: 45px;height: 45px;">

						
					</div>
				</div>
				<span>上传文件格式仅限：jpg,png</span>
			</div> 
			
		</div> 
		<div class="common-line spe clearfix">
			<p>用户名</p>
			<?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写用户名')]) ?>
		
		</div> 
		<div class="common-line spe clearfix">
			<p>邮箱</p>
			<?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写邮箱')]) ?>
			
		</div> 
		<div class="common-line clearfix">
			<p>性别</p> 
			<div class="sex-list fl">
			<?= $form->field($model, 'sex' )->dropDownList(['1' =>'男' ,'2' =>'女'])?>
			</div>
		</div> 
		<div class="common-line clearfix">
			<p>城市</p> 
			<?= $form->field($model, 'city')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写所在的城市')]) ?>
		</div> 
		<div class="common-line clearfix">
			<p>星座</p> 
			<?= $form->field($model, 'Constellation' )->dropDownList(['1' =>'白羊座' ,'2' =>'金牛座','3' =>'双子座' ,'4' =>'巨蟹座','5' =>'狮子座' ,'6' =>'处女座' ,'7' =>'天秤座' ,'8' =>'天蝎座' ,'9' =>'射手座','10' =>'摩羯座','11' =>'水瓶座' ,'12' =>'双鱼座' ])?>

		</div> 
		<div class="common-line clearfix bottom"><p>个人简介</p> 
		<?= $form->field($model, 'introduction')->textarea(['autofocus' => true,'placeholder' => Yii::t('app', '填写您的个人简介可以帮助别人更好的了解您...')]) ?>
			
		</div> 
		<div class="error-msg"></div> 
		<button class="modify-btn">确认修改</button>
	</div>
</div>
<?php ActiveForm::end(); ?>
</main>