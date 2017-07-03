<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Channel';
$this->params['breadcrumbs'][] = $this->title;
?>

<main class="main-center">
	<div class="chn-index">

		<div class="chn-index clearfix">




			<section class="main-right">
				<div  class="common-card">
					<div class="v-banner">
						<article class="jq22-container">

							<div class = "caroursel poster-main" data-setting = '{
							"width":1000,
							"height":270,
							"posterWidth":640,
							"posterHeight":270,
							"scale":0.8,
							"dealy":"2000",
							"algin":"middle"
						    }'>


							<ul class = "poster-list">
								<li class = "poster-item"><img src="../static/img/1.jpg" width = "100%" height="100%"></li>
								<li class = "poster-item"><img src="../static/img/4.jpg" width = "100%" height="100%"></li>
								<li class = "poster-item"><img src="../static/img/4.jpg" width = "100%" height="100%"></li>
								<li class = "poster-item"><img src="../static/img/1.jpg" width = "100%" height="100%"></li>
								<li class = "poster-item"><img src="../static/img/4.jpg" width = "100%" height="100%"></li>
								<li class = "poster-item"><img src="../static/img/1.jpg"  width = "100%" height="100%"></li>
								<li class = "poster-item"><img src="../static/img/4.jpg"  width = "100%" height="100%"></li>
							</ul>


							<div class = "poster-btn poster-prev-btn"></div>
							<div class = "poster-btn poster-next-btn"></div>
							</div>
						</article>
					</div>


					<div class="rmtj">
						<div class="v-hd2">
							<a href="<?= Url::to(['index']); ?>" class="tit f-ff2 f-tdn">热门推荐</a>
							<div class="tab">
								<?php foreach ($zchannel as $zchannels):?>
									<a href="<?= Url::to(['cpd', 'id'=>$zchannels[ 'id']]); ?>" class="s-fc3"><?php echo $zchannels['channelname'];?></a>
									<span class="line">|</span>

								<?php endforeach;?>
							</div>
							<span class="more"><a href="/discover/playlist/" class="s-fc3">更多</a><i class="cor s-bg s-bg-6">&nbsp;</i></span>
						</div>

						<div class="clearfix1">
							<h3>热门频道</h3>
						</div>
						<?php foreach ($channel as $channels):?>
							<div class="hot_channel clearfix">
								<div class="chn-content_list clearfix b">
									<div class="chn-content_hover">
										<a href="<?= Url::to(['music', 'id'=>$channels['id']]); ?>">
											<div class="chn-left_content" style="background-image: url(&quot;<?php echo $ul?>static/img/<?php echo $channels['img'];?>&quot;);">
												<div class="black-mask">

												</div> 
												<h4><?php  echo $channels['channelname'];?></h4> 
												<span class="chn-left_music">1916</span> 
												<span class="chn-left_person">2.8万</span>
												<span class="chn-left_shar">98</span>
											</div>
										</a> 
										<div>
											<i data-sid="410237,457074,1307706,818556,220534,739194" data-need-login="1" class="chn-yijianplay js-mp-play-one"></i> 
											<i class="chn-platter"></i>
										</div>
									</div> 
									<div class="chn-right_content">
										<h5 class="chn-channelHot">频道热门回声</h5> 
										<ul class="clearfix">
											<?php foreach ($music as $musics):?>
												<?php 
												$i=0;
												$i++;

												if($musics['channelid']==$channels['id']){
													echo "<li>"."<a href=\"".Url::to(['mplay', 'id'=>$musics[ 'id']])."\" class='clearfix'>".
													"<i class='right_ftx' style='background-image: url(\"".$ul."static/img/".$musics['img']."\");'>"."</i>".
													"<span class='ftx_first'>".$musics['musictitle']."</span>".
													"<span class='ftx_second'>".$musics['musicer']."</span>".
													"</a>".
													"</li>";

												}
												if($i>6){
													break;
												}
												?>
											<?php endforeach;?>

										</ul>
									</div>

								

						 </div>
						<?php endforeach;?>

					</div>

                </div>

			</section>

            <div class="listpage" style="text-align:-webkit-center;">
				<?= LinkPager::widget(['pagination' => $pages]); ?>
			</div>




				
		</div>
	</div>
</main>



<?php $this->beginBlock('test') ?>  
$(function(){
// 初始化轮播
Caroursel.init($('.caroursel'));
$("#myCarousel").carousel('cycle');
});
<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>