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
	<div class="chn-info">
	  
		<div class="single-header clearfix">
			<a class="singleheader-back"><i class="act-back"></i>返回</a> 
			<div class="singleheader-share">
				<span>分享</span>
				<a data-cmd="weixin" title="分享到微信" class="to-weixin"></a> 
				<a data-cmd="tsina" title="分享到新浪微博" class="to-weibo"></a>
			</div>
		</div> 
		<?php foreach ($channel as $channels):?>
		<div class="chan-wonderful">
			<div class="chan-wonderful_top clearfix">
				<h4><?php echo  $channels['channelname'];?></h4>
				<span class="left_shar">1.6万</span> 
				<span class="left_person">121.8万</span> 
				<span class="left_music">4.3万</span>
			</div> 
			<div class="chan-wonderful_footer clearfix">
				<div class="chanbac" style="background-image: url(&quot;<?php echo $ul?>static/img/<?php echo $channels['img'];?>&quot;);">

				</div>
				<h4>频道简介</h4> 
				<p>echo独家3D音乐，颠覆你的听觉体验</p> 
				<a data-sid="743086,473451,757934,520574,843654,751404,1073464,456687,527652,828011,578992,1032832,776261,621068,761893" data-random="1" data-limit="10" data-need-login="1" class="chan-hear js-mp-play-one">
					<i></i> 
					<span>随便听听</span>
				</a> 
				<a href="javascript:void(0)" class="chan-follow">
					<div data-state="0" data-id="1155" class="chan-follow-click">
						<span>关注</span> 
					</div>
				</a>
			</div>
		</div> 
		
		<div class="chan-hot_new">
			<a href="#/channel/1155?order=hot">
				<span class="zui_hot current">最热</span>
			</a>
			<a href="#/channel/1155?order=new">
				<span class="zui_new">最新</span>
			</a>
		</div>
		<div class="chan-exp">
			<div class="chan-exppopular clearfix ">
				<ul class="chan-exppopular-list ">
                  <?php foreach ($music as $musics):?>
					<li class="chan-exppopular-box">
						<div class="pic">
							<a href="<?= Url::to(['mplay', 'id'=>$musics[ 'id']]); ?>">
								<img src="<?php echo $ul?>static/img/<?php echo $musics['img'];?>">
							</a>
							<div class="duration">
								<i id="playbtn"></i><?php echo $musics['duration'];?>
							</div>
						</div> 
						<a href="<?= Url::to(['mplay', 'id'=>$musics[ 'id']]); ?>" id="song-name"><?php echo $musics['musicname'];?></a> 
						<h4><a href="#/channel/1155"><?php echo $channels['channelname'];?></a>频道</h4> 
						<ul class="status">
							<li>
								<i class="share"></i><span>39.1万</span>
							</li> 
							<li>
								<i class="like"></i>
								<span>32.8万</span>
							</li> 
							<li>
								<i class="comment"></i>
								<span>3.1万</span>
							</li>
						</ul>
					</li>
                 <?php endforeach;?>
                <?php endforeach;?>
			</ul> 
		
		</div>
	</div>
  </div>
  <div class="listpage" style="text-align:-webkit-center;">
  	<?= LinkPager::widget(['pagination' => $pages]); ?>
  </div>
  
</main>
<?php $this->beginBlock('test') ?>  
$(function(){
    $('#playbtn').click(function(){
         $.ajax({
             type: "POST",
             url: "",
             data: {"songname":"llSS"},
             dataType: "json",
             success: function(data){
                        
                        
                      }
         });
    });
});

<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
