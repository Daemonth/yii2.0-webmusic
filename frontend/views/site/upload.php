<?php
use yii\widgets\ActiveForm;
$cssString = ".form-control{
    width: 390px;
    height: 38px;
    border: 1px solid #e8e8e8;
    background: #fff;
    padding: 0 15px;
    font-size: 14px;
    color: #666;
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

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<main class="main-center">
	<main>

									
		<section class="v-upload-tab">
			<a class="tab on">上传回声</a> 
			<!----></section>
			<section class="v-sound-upload">
				<!---->  <section class="form">
				<div class="tr clearfix">

					<div class="td-left">回声封面</div> 
					<div class="td-right">
						<div class="upload-cover-btn">

							<div class="upload-status">
                               
									
                               <input type="file" capture="camera" name="MusicForm[imageFile]" class="webuploader-element-invisible" multiple="multiple" accept="" style="opacity: 0; width: 45px;height: 45px;">

							</div>
							
						</div>  
					</div>
				</div>
				<div class="tr clearfix">
					<div class="td-left">回声上传</div> 
					<div class="td-right">
						<div class="upload-sound-btn">
							<span id="sound_upload_btn" class="webuploader-container">
								<div class="webuploader-pick">上传回声</div>
								<div id="rt_rt_1b6r7mhmi1uar1s2mgut1975187a4" style="position: absolute; top: 0px; left: 0px; width: 420px; height: 43px; overflow: hidden; bottom: auto; right: auto;">
									<input type="file" capture="camera" name="MusicForm[soundFile]" class="webuploader-element-invisible" multiple="multiple" accept="">
									<label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);">

									</label>
								</div>
							</span>
						</div> 
						<div class="upload-sound-btn uploading" style="display: none;">
							<div class="progress" style="width: 0%;">

							</div> 
							<div class="word-left">
								正在上传 0%
							</div>
							<div class="word-right">取消上传</div>
						</div>
						<small class="">*上传文件格式仅限: mp3／m4a</small>
					</div></div> <div class="tr clearfix">
					<div class="td-left">回声标题</div> 
					<div class="td-right">
						<?= $form->field($model, 'musictitle')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写标题')]) ?>
					</div>
				</div> 
				<div class="tr clearfix">
					<div class="td-left">回声频道</div> 
					<div class="td-right">
						<input type="text" readonly="readonly" placeholder="请选择回声所在的频道" class="input" name="MusicForm[channelid]"> 
						<button class="choose-channel-btn">选择</button>
					</div>
				</div> 
				
							<div class="valid-title">选填项</div> 
							<div class="tr clearfix">
								<div class="td-left">歌曲名</div> 
								<div class="td-right">
									 <?= $form->field($model, 'musicname')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写标题')]) ?>
								</div>
							</div> <div class="tr clearfix">
							<div class="td-left">原唱</div> 
							<div class="td-right">
							<?= $form->field($model, 'musicer')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写原唱者')]) ?>
							</div>
						</div> 
						<div class="tr clearfix">
							<div class="td-left">专辑</div> 
							<div class="td-right">
							<?= $form->field($model, 'zj')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写该歌曲所属专辑')]) ?>
							</div>
						</div> 
						<div class="tr clearfix">
							<div class="td-left">作曲</div> 
							<div class="td-right">
							<?= $form->field($model, 'zq')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写作曲者')]) ?>
						
							</div>
						</div> 
						<div class="tr clearfix">
							<div class="td-left">作词</div>
							<div class="td-right">
							<?= $form->field($model, 'zc')->textInput(['autofocus' => true,'placeholder' => Yii::t('app', '请填写作词者')]) ?>
								
							</div>
						</div> 
						<div class="tr clearfix">
							<div class="td-left">歌词</div>
							<div class="td-right">
								<?= $form->field($model, 'gc')->textarea(['autofocus' => true,'placeholder' => Yii::t('app', '请填写歌词...')]) ?>
								
							</div>
						</div>

							<div class="tr clearfix">
								<div class="td-left">回声简介</div> 
								<div class="td-right">
								<?= $form->field($model, 'jianj')->textarea(['autofocus' => true,'placeholder' => Yii::t('app', '这里是回声简介...')]) ?>
							

								</div>

							</div>
						
						<div class="tr last clearfix">
							<div class="td-left">&nbsp;</div> 
							<div class="td-right"><label style="margin-right: 0px;">
								<input type="checkbox"><i class="status-checkbox">

							</i>
						</label> 
						<div class="declare-info">
							我确认上传的歌曲版权归echo独家，本人未经允许无权转授传播。并默认同意echo回声作品使用及分成协议。若涉及侵权，自行担负法律责任。<br>同意 
							<a href="/sound/declare" target="***declare***" class="dec">《echo回声作品版权声明》</a> <a href="/index/agreement?v=sharing" target="***sharing***" class="dec">《echo回声作品使用及分成协议》</a></div> <button class="submit on">上传回声</button>
						</div>
					</div>
				</section> <!---->
			</section>
		</main>
	</main>
	<?php ActiveForm::end(); ?>