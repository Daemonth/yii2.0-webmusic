<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div class="g-bd">

	<div class="g-wrap p-prf">
	
		<dl class="m-proifo f-cb" id="head-box">
			<dt class="f-pr" id="ava">
				<img src="<?php echo $ul?>uploads/<?php echo Yii::$app->user->identity->useimg;?>">
				<div class="btm"><a href="<?= Url::to(['upuse']); ?>" class="upload">更换头像</a></div>
			</dt>
			<dd>
				<div class="name f-cb">
					<div class="f-cb">
						<div class="edit"><a href="<?= Url::to(['upuse']); ?>" hidefocus="true" class="u-btn2 u-btn2-1"><i>编辑个人资料</i></a></div>
						<div class="rect" id="newmusician"></div>
						<h2 id="j-name-wrap" class="wrap f-fl f-cb ">
							<span class="tit f-ff2 s-fc0 f-thide"><?php echo Yii::$app->user->identity->username;?></span>
							<span class="lev u-lev u-icn2 u-icn2-lev">6<i class="right u-icn2 u-icn2-levr"></i></span>
							<i class="icn u-icn u-icn-01"></i>
						</h2>
					</div>
				</div>
				<ul class="data s-fc3 f-cb" id="tab-box">
					<li class="fst">
						<a href="/user/event?id=336071548">
							<strong id="event_count"><?php echo $count2;?></strong><span>动态</span>
						</a>
					</li>
					<li><a href="/user/follows?id=336071548"><strong id="follow_count"><?php echo $count;?></strong><span>关注</span></a>
					</li>
					<li>
						<a href="/user/fans?id=336071548">
							<strong id="fan_count"><?php echo $count1;?></strong>
							<span>粉丝</span>
							<i class="u-icn u-icn-68 f-alpha" id="newCount" style="display:none;"></i>
						</a>
					</li>
				</ul>
				<div class="inf s-fc3">
					<span>所在地区：<?php echo Yii::$app->user->identity->city;?></span>
					<span class="sep" id="age" data-age="631123200000">&nbsp;年龄：<span>90后</span></span>
				</div>
				<div class="inf s-fc3 f-cb">
					<span class="tit">社交网络：</span>
					<ul class="u-logo u-logo-s f-cb">
						<li><i class="u-slg u-slg-sn-gray" title="新浪微博"></i></li>
						<li><i class="u-slg u-slg-db-gray" title="豆瓣网"></i></li>
					</ul>
				</div>
			</dd>
		</dl>
	
		<div class="u-title u-title-1 f-cb" id="lHeader" style="display:none;">
			<h3><span class="f-ff2">我的听歌排行</span></h3>
<!-- <span class="f-ff2" data-action="week" id="week">最近一周</span>
	<span class="f-ff2" data-action="all" id="all">所有时间</span> -->
</div>
<ul class="m-rctten f-cb" id="listenedBox" style="display:none;">
</ul>
<a href="/user/songs/rank?id=336071548" id="more" style="display:none;">查看更多</a>
<div class="u-title u-title-1 f-cb m-record-title" id="rHeader">
	<h3><span class="f-ff2 s-fc3">听歌排行</span></h3>
	
	<span class="n-iconpoint">
		<a href="javascript:void(0)" class="icon u-icn2 u-icn2-5 j-flag"></a>
		<div class="tip"><!-- icon在hover的时候显示tip -->
			<p>实际播放时间过短的歌曲将不纳入计算。</p>
			<i class="t"></i><i class="b"></i>
		</div>
	</span>
	<div class="nav f-cb">
		<span data-action="songsall" id="songsall">所有时间</span>
		<i></i>
		<span data-action="songsweek" id="songsweek" class="z-sel">最近一周</span>
	</div>
</div>
<div id="m-record" data-uid="336071548" data-songs="1274" class="m-record">
	<div oncopy="return false;" oncut="return false;" ondragstart="return false;" id="auto-id-TQRJZ3zWt6E3sFIA">
		<div class="j-flag" id="auto-id-CrlQ8iX81Xqn8X6Z">
			<ul>
			<?php foreach ($music as $musics):?>
				<li id="363087191491491776474">
					<div class="hd ">
						<span data-res-id="36308719" data-res-type="18" data-res-action="play" data-res-from="50" data-res-data="336071548|1" class="ply ">&nbsp;</span>
						<span class="num">1.</span>
					</div>
					<div class="song">
						<div class="tt">
							<div class="ttc">
								<span class="txt">
									<a href="/song?id=36308719">
										<b title="걱정말아요 그대"><?php echo $musics['musictitle'];?></b>
									</a>
									<span class="ar s-fc8"> 
										<em>-</em>
										<span title="李笛">
											<a class="s-fc8" href="/artist?id=124132" hidefocus="true"><?php echo $musics['musicer'];?></a>
										</span>
									</span>
								</span>
							</div>
						</div>
						<div class="opt">
							<a class="u-icn u-icn-81 icn-add" href="javascript:;" title="添加到播放列表" hidefocus="true" data-res-type="18" data-res-id="36308719" data-res-action="addto" data-res-from="50" data-res-data="336071548|1"></a>
							<span data-res-id="36308719" data-res-type="18" data-res-action="subscribe" class="icn icn-fav" title="收藏">

							</span>
							<span data-res-id="36308719" data-res-type="18" data-res-action="share" data-res-name="걱정말아요 그대" data-res-author="李笛" class="icn icn-share" title="分享">分享</span>
							<span data-res-id="36308719" data-res-type="18" data-res-action="download" class="icn icn-dl" title="下载">下载</span>
						</div>
					</div>
					<div class="tops"><span class="bg" style="width:100%;"></span>
						<span class="times f-ff2"><?php echo $musics['time'];?></span>
					</div>
				</li>
				<?php endforeach;?>
			</ul> 
			<div class="more">
				<a href="<?= Url::to(['smusic', 'id'=>Yii::$app->user->identity->id]);?>">查看更多&gt;</a>
			</div>
		</div>
		<div class="j-flag"></div>
	</div>
</div>


<div class="u-title u-title-1 f-cb" id="sHeader" style="">
	<h3><span class="f-ff2">我喜欢的歌</span></h3>
</div>
<div id="m-record" data-uid="336071548" data-songs="1274" class="m-record">
	<div oncopy="return false;" oncut="return false;" ondragstart="return false;" id="auto-id-TQRJZ3zWt6E3sFIA">
		<div class="j-flag" id="auto-id-CrlQ8iX81Xqn8X6Z">
			<ul>
			<?php foreach ($music1 as $music1s):?>
				<li id="363087191491491776474">
					<div class="hd ">
						<span data-res-id="36308719" data-res-type="18" data-res-action="play" data-res-from="50" data-res-data="336071548|1" class="ply ">&nbsp;</span>
						<span class="num">1.</span>
					</div>
					<div class="song">
						<div class="tt">
							<div class="ttc">
								<span class="txt">
									<a href="/song?id=36308719">
										<b title="걱정말아요 그대"><?php echo $music1s['musictitle'];?></b>
									</a>
									<span class="ar s-fc8"> 
										<em>-</em>
										<span title="李笛">
											<a class="s-fc8" href="/artist?id=124132" hidefocus="true"><?php echo $music1s['musicer'];?></a>
										</span>
									</span>
								</span>
							</div>
						</div>
						<div class="opt">
							<a class="u-icn u-icn-81 icn-add" href="javascript:;" title="添加到播放列表" hidefocus="true" data-res-type="18" data-res-id="36308719" data-res-action="addto" data-res-from="50" data-res-data="336071548|1"></a>
							<span data-res-id="36308719" data-res-type="18" data-res-action="subscribe" class="icn icn-fav" title="收藏">

							</span>
							<span data-res-id="36308719" data-res-type="18" data-res-action="share" data-res-name="걱정말아요 그대" data-res-author="李笛" class="icn icn-share" title="分享">分享</span>
							<span data-res-id="36308719" data-res-type="18" data-res-action="download" class="icn icn-dl" title="下载">下载</span>
						</div>
					</div>
					<div class="tops"><span class="bg" style="width:100%;"></span>
						<span class="times f-ff2"><?php echo $music1s['time'];?></span>
					</div>
				</li>
				<?php endforeach;?>
			</ul> 
			<div class="more">
				<a href="<?= Url::to(['lmusic', 'id'=>Yii::$app->user->identity->id]); ?>">查看更多&gt;</a>
			</div>

		</div>
		<div class="j-flag"></div>
	</div>
</div>
</div>
</div>