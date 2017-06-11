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

					</article>
				    </div>


				<div class="rmtj">
					<div class="v-hd2">
						<a href="/discover/playlist/" class="tit f-ff2 f-tdn">热门推荐</a>
						<div class="tab">
							<?php foreach ($zchannel as $zchannels):?>
								<a href="<?= Url::to(['channel', 'id'=>$zchannels[ 'id']]); ?>" class="s-fc3"><?php echo $zchannels['channelname'];?>

								</a>
								<span class="line">|</span>

							<?php endforeach;?>
						</div>
						<span class="more"><a href="/discover/playlist/" class="s-fc3">更多</a><i class="cor s-bg s-bg-6">&nbsp;</i></span>
					</div>
					<div class="clearfix1"><h3>热门频道</h3></div>
					<div class="hot_channel clearfix">
						<div class="chn-content_list clearfix b">
							<div class="chn-content_hover">
								<a href="#/channel/1170">
									<div class="chn-left_content" style="background-image: url(&quot;https://up-up-kibey-echo-cdn.app-echo.com/poster/2016/01/12/hnrpbdgo6qk8wb2y.jpg!/fwfh/500x500/unsharp/true&quot;);">
										<div class="black-mask">

										</div> 
										<h4>音乐创作studio</h4> 
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
											<span class="ftx_second">左颜的天空</span>
										</a>
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
						<div class="chn-content_list clearfix b">
							<div class="chn-content_hover">
								<a href="#/channel/1170">
									<div class="chn-left_content" style="background-image: url(&quot;https://up-up-kibey-echo-cdn.app-echo.com/poster/2016/01/12/hnrpbdgo6qk8wb2y.jpg!/fwfh/500x500/unsharp/true&quot;);">
										<div class="black-mask">

										</div> 
										<h4>音乐创作studio</h4> 
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
											<span class="ftx_second">左颜的天空</span>
										</a>
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
						<?php foreach ($channel as $channels):?> 
							<div class="chn-content_list clearfix b">
								<div class="chn-content_hover">
									<a href="#/channel/1170">
										<div class="chn-left_content" style="background-image: url(&quot;https://up-up-kibey-echo-cdn.app-echo.com/poster/2016/01/12/hnrpbdgo6qk8wb2y.jpg!/fwfh/500x500/unsharp/true&quot;);">
											<div class="black-mask">

											</div> 
											<h4>音乐创作studio</h4> 
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
												<span class="ftx_second">左颜的天空</span>
											</a>
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
								<?php endforeach;?>
								<div class="LinkPager">
									<?=LinkPager::widget(['pagination' => $pages]);?>
								</div>
							</div>
						
						
					</div>
					 

				</div>
                


               </div>
				<div class="m_player">
					<!-- 主体 -->
					<div class="m_player_dock">
						<!-- 歌曲信息 -->
						<div class="music_icon">
							<a href="javascript:;"class="album_pic">
								<img src="../static/img/a1.png" alt="">
							</a>
							<div class="music_info_main">
								<p class="music_name">
									<span>听我想听的歌</span>
									<a class="icon_radio"></a>
								</p>
								<p class="singer_name">网易</p>
								<p class="play_date">2:16</p>
								<p class="music_op">
									<strong class="btn_like"></strong>
									<strong class="btn_share"></strong>
								</p>
							</div>
						</div>
						<!-- 暂停 上一首 下一首 -->
						<div class="bar_op">
							<strong class="prev_bt" title="上一首"></strong>
							<strong class="play_bt" title="播放"></strong>
							<strong class="next_bt" title="下一首"></strong>
							<strong class="cycle_bt" id="btnplayway" title="列表循环"></strong>
							<p class="volume" title="音量调节">
								<span class="volume_icon" title="设置为静音"></span>
								<span class="volume_regulate">
									<span class="volume_bar"></span>
									<span class="volume_op"></span>
								</span>
							</p>
						</div>
						<p class="playbar_cp_select">
							<strong class="ordered_bt" title="顺序播放"></strong>
							<strong class="unordered_bt" title="随机播放"></strong>
							<strong class="cycle_single_bt" title="单曲循环"></strong>
							<strong class="cycle_bt" title="列表循环"></strong>
						</p>
						<p class="play_bar">
							<span class="play_bg_bar"></span>
							<span class="download_bar"></span>
							<span class="play_current_bar"></span>
							<span class="progress_op"></span>
						</p>
						<div class="time_show">
							<p id="time_show">--:--</p>
							<span class="icon_arrow_foot">
								<i class="foot_border"></i>
								<i class="foot_arrow"></i>
							</span>
						</div>
					</div>
					<!-- 隐藏显示按钮 -->
					<button type="button" class="folded_bt"></button>
					<!-- 歌曲列表 -->
					<div class="play_list_frame">
						<div class="play_list_title">
							<ul>
								<li class="current"><a href="javascript:;">播放列表</a><i></i></li>
								<li><a href="javascript:;">单曲电台列表</a></li>
							</ul>
							<span class="clear_list">清空列表</span>
							<storng class="close_list"></storng>
						</div>
						<div class="play_list">
							<div class="play_list_main">
								<div class="single_list">
									<ul></ul>
								</div>
							</div>
						</div>

					</div>
					<!-- 歌词 -->
					<div class="y_player_lyrics">
						<div class="lyrics_text">
							<p><span class></span></p>
							<p><span class="current">一个人 - 张艺兴</span></p>
							<p><span>词：张艺兴</span></p>
							<p><span class>曲：张艺兴</span></p>
						</div>
						<span class="close_lyrics"></span>
					</div>
					<!-- 打开隐藏歌曲列表-->
					<span class="open_list">
						<span>0</span>
					</span>
					<!-- 显示歌词 -->
					<span class="btn_lyrics_disabled">
					</span>
				</div>

             
			</section>
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