<?php
use yii\widgets\ActiveForm;

?>

<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

   <div class="form-group">
          <div class="label">
            <label>频道标题：</label>
          </div>
           <div class="field">
              
               <input  name="channelname"   type="text" value=""  data-validate="required:请输入标题" />
            <div class="tips"></div>
          </div>
        </div>



    <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
           <div class="field">
            <select name="pid">
               <option value="">主分类</option>
             <?php foreach ($channel as $channels):?>
              <option  value="<?php echo $channels['id'];?>"><?php echo $channels['channelname'];?></option>
            <?php endforeach;?>  
            </select>

            <div class="tips"></div>
          </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
           

    <?= $form->field($model, 'img')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[
            //图片上传的一些配置，不写调用默认配置
             // 'domain_url' => 'localhost/yii2',
        ]
        ]) ?> 
        </div>
      </div>     
      
     



        
     
    


        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    <?php ActiveForm::end(); ?>
  </div>
</div>
