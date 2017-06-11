<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

 <?= $form->field($model, 'file')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[
            //图片上传的一些配置，不写调用默认配置
             // 'domain_url' => 'localhost/yii2',
        ]
        ]) ?> 
  <img src="/image/20170115/1484474794396077.png">
<button>Submit</button>

<?php ActiveForm::end() ?>