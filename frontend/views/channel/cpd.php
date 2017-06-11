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
											<div class="chn-left_content" style="background-image: url(&quot;https://up-up-kibey-echo-cdn.app-echo.com/poster/2016/01/12/hnrpbdgo6qk8wb2y.jpg!/fwfh/500x500/unsharp/true&quot;);">
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
											<li>
												<a href="#/sound/410237" class="clearfix">
													<i class="right_ftx" style="background-image: url(&quot;https://up-up-kibey-echo-cdn.app-echo.com/poster/2015/05/08/2e265e4cf13659a0.png!/fwfh/100x100/unsharp/true&quot;);"></i>
													<span class="ftx_first">See You Again 中文版翻唱 陈杰瑞</span>
													<span class="ftx_second">陈杰瑞</span>
												</a>
											</li>
											<li>
												<a href="#/sound/457074" class="clearfix seconda">
													<i class="right_ftx" style="background-image: url(&quot;https://qn-qn-echo-image-cdn.app-echo.com/FhxSKZTvkiAmBBqCrt4RmpQQCkR5?imageMogr2/auto-orient/quality/100%7CimageView2/0/w/100/q/100&quot;);"></i>
													<span class="ftx_first">戴荃桀骜「悟空」遇上美猴王齐天大圣</span> 
													<span class="ftx_second">戴荃</span>
												</a>
											</li>
											<li>
												<a href="#/sound/1307706" class="clearfix"><i class="right_ftx" style="background-image: url(&quot;https://al-qn-echo-image-cdn.app-echo.com/FsReWANKG91cYQXYZvN7vVvCW-Wi?imageMogr2/auto-orient/quality/100%7CimageView2/0/w/100/q/100&quot;);"></i> 
													<span class="ftx_first">原创日文摇滚 Get Fuzzy</span> 
													<span class="ftx_second">万伟康</span>
												</a>
											</li>
											<li>
												<a href="#/sound/818556" class="clearfix seconda"><i class="right_ftx" style="background-image: url(&quot;https://up-qn-echo-image-cdn.app-echo.com/FlvtUB6avJOxz10848hCjYD1L29E?imageMogr2/auto-orient/quality/100%7CimageView2/0/w/100/q/100&quot;);"></i> 
													<span class="ftx_first">岁月静好 安之若素 你以为 原创歌曲</span> 
													<span class="ftx_second">左颜的天空</span></a>
												</li>
												<li>
													<a href="#/sound/220534" class="clearfix"><i class="right_ftx" style="background-image: url(&quot;https://up-qn-echo-image-cdn.app-echo.com/Fkokm4ZV9kwYgqnG2uIf-FIuGStL?imageMogr2/auto-orient/quality/100%7CimageView2/0/w/100/q/100&quot;);"></i> 
														<span class="ftx_first">17岁高中生自己谱曲编词演唱 记·念</span> 
														<span class="ftx_second">雷雨心AdoKenTorothy</span>
													</a>
												</li>
												<li>
													<a href="#/sound/739194" class="clearfix seconda">
														<i class="right_ftx" style="background-image: url(&quot;https://al-qn-echo-image-cdn.app-echo.com/bb84ba78279ebab55e1a6c012ab3ca8d.png?imageMogr2/auto-orient/quality/100%7CimageView2/0/w/100/q/100&quot;);"></i> 
														<span class="ftx_first">刘伟男Will Jay原创单曲 Version of Love </span>
														<span class="ftx_second">WillJay刘伟男</span>
													</a>
												</li>

											</ul>
										</div>
									</div>


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