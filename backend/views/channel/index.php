   <?php

use yii\helpers\Html;
use yii\helpers\Url;
use common\widgets\file_upload\FileUpload;   //引入扩展
use yii\widgets\ActiveForm;
?>
<div class="auth-item-model-index">

    <div class ="search-container" >
       <?=Html::a("添加 <i class='icon-plus'></i>" , ['addchel'], ['class' => 'btn btn-success green']) ?>
       <form action ="" class="form-search pull-right" >
            <div class ="input-append" >
                <select name ="type" class="search-option">
                    <option value ="name">名称</ option>
                </select >
                 <input name ="value" class="m-wrap" type="text" placeholder= "请输入搜索内容" >
                 <button class ="btn green" type= "submit">搜索</button >
            </div >
     </form >
    </div >

<div class="summary">
   
    <table class ="table table-striped table-bordered table_base">
        <thead >
            <tr >
<!--                 <th> -->
<!--                     <div class="checker"><span><input type="checkbox" value="1" name="select_all" class="select-on-check-all"></span></div> -->
<!--                 </th> -->
                <th >ID</th >
                <th >频道名称 </th >
                <th >频道封面</th >
                <th >描述</th >
                <th >创建时间</th >
                <th >操作 </th >
            </tr >
        </thead >
        <tbody >
            <?php if ( empty($channel)): ?>
            <tr ><td colspan ="20"><?=Yii::t('common' ,'Not find data') ?> </td ></tr >
            <?php else: ?>
            
            <?php foreach ($channel as $channels):?>
            <tr data-key ="<?=$channels['channelname'] ?>" >
<!--                 <td> -->
<!--                     <div class="checker"><span><input type="checkbox" value="158" name="select"></span></div> -->
<!--                 </td> -->
                <td ><?php echo $channels[ 'id'];?> </td >
                <td ><?php echo $channels[ 'channelname'];?></ td>               
                <td ><?php echo $channels[ 'img'];?></ td>
                <td ><?php echo "无";?></ td>
                <td> <?php echo $channels[ 'is_hot'];?></ td>               
                <td >
                    <a href= "<?= Url::to([ 'update', 'id'=>$channels[ 'id']]); ?>" >编辑 </a >
                    <a class ="del" href= "javascript:;">删除</a >
                </td >
            </tr >
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody >
    </table >

    <input type ="hidden" name="delUrl" value= "<?= Url::to([ 'delete']) ?>" >
</div>