<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<section class="partleft">
	<div>
		<div class="common-card">
			<div class="userinfov3">
				<i class="id">9154317</i> 
				<i class="id" style="right: 10px; left: inherit;">9154317</i> 
				<div class="user-avatar icon-famous icon-famous-2x icon-famous0">
					<img src="<?php echo $ul?>uploads/<?php echo Yii::$app->user->identity->useimg;?>">
				</div>
				<div class="userinfov3-name user-vip user-vip-large user-vip-0"><?php echo Yii::$app->user->identity->username;?></div> 
				<div class="else-info">
					<i class="icon-sex icon-sex0"></i> 
					<span class="xz"><?php echo Yii::$app->user->identity->Constellation;?></span> 
					<span class="icon-place"><?php echo Yii::$app->user->identity->city;?></span>
				</div> 
				<div class="userinfov3-counts clearfix">
					<a href="#/user/sound?uid=9154317" class="numbox">
						<span class="num"><?php echo $count5;?></span>
						<span class="item">动态</span>
					</a> 
					<a href="#/user/followed?uid=9154317" class="numbox">
						<span class="num"><?php echo $count4;?></span> 
						<span class="item">被关注</span>
					</a> 
					<a href="#/user/following?uid=9154317" class="numbox numbox-no-border">
						<span class="num"><?php echo $count3;?></span> 
						<span class="item">关注的</span>
					</a>
				</div>
			</div>
		</div> 
		<div class="common-card">
			<a class="nav-activity" href="<?= Url::to(['user/index']); ?>">个人主页</a> 
			<!---->
		</div> 
		<div class="common-card">
			<a href="<?= Url::to(['community']); ?>" class="nav-activity icon-current">我的好友圈</a> 
			<!---->
		</div> 
		<div class="common-card">
			<a href="<?= Url::to(['community']); ?>" class="nav-activity">我发的动态</a> 
			<a href="<?= Url::to(['user/index']); ?>" class="nav-activity">我发的回声</a> 
			<a href="<?= Url::to(['user/index']); ?>" class="nav-activity">我喜欢的回声</a>
		</div>
	</div>
</section>
<section class="partcenter">
	<!---->
	<div class="common-card">
		<section class="feed-add-base clearfix">
			<textarea placeholder="音乐，故事，心情…">
			</textarea> 
			<i class="triangle"></i> 
			<!----> 
			<input type="submit" value="发布" class="">
			<div class="count-input-str">还可以输入<span>1000</span>字</div> 
			<div class="icon-pic js-upload-img">
				<!----> <!---->
			</div> 
			<div class="icon-music js-chosen-sound-btn"><!----> <!----></div> 
			<div class="ready-upload-pic" style="display: none;">
				<h2><span>添加图片</span>
					<em class="close-btn">关闭</em>
				</h2> 
				<div class="states-info">共<em>0</em>张，最多上传<strong>9</strong>张</div>
				<!----> 
				<div class="img9btn-f">
					<div id="img9btn" class="btn-upload webuploader-container">
						<div class="webuploader-pick">从本地相册上传</div>
						<div id="rt_rt_1bdcbehpv8u81onf1iu71qc3rl71" style="position: absolute; top: 0px; left: 0px; width: 1px; height: 1px; overflow: hidden;">
							<input type="file" capture="camera" name="file" class="webuploader-element-invisible" multiple="multiple" accept=""><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);">
						</label>
					</div>
				</div>
			</div>
		</div> 
		<div class="ready-upload-sound js-chosen-sound-panel" style="display: none;">
			<h2>添加回声<a class="close-btn">关闭</a>
			</h2> 
			<input type="text" placeholder="输入你要查找的歌曲/歌手/专辑" class="search_sound"> 
			<div class="sound_type">
				<a class="on">我喜欢的</a> 
				<a class="">最近浏览</a> 
				<a class="">我添加的</a>
			</div> 
			<ul class="sound-list clearfix">

			</ul>
		</div>
	</section>
	<section class="feed-list clearfix feed-spot mgt25">
    
	<?php $i=0;$a=0;foreach ($trend as $trends):?>
      
		<div data-id="91131777" data-uid="159723" class="feed-one">
			<div class="content clearfix">
			
				<div class="feed-one-left">
                    
                  
                    <?php  $i++;$b=$i-1;?>

                    <?php  if (array_key_exists("addtion",$trend[$b])):?> 
                    <?php  $user=$trend[$b]['user'];foreach ($user as $users):?>
                      
					<a href="<?= Url::to(['user/auser', 'id'=>$users['id']]); ?>" class="user-avatar icon-famous icon-famous8">
					<img src="<?php echo $ul?>uploads/<?php echo $users['useimg'];?>">
					</a> 
                    <?php    endforeach;endif;?> 

                    <?php  if (!array_key_exists("addtion",$trend[$b])):?> 
                     
					<a href="<?= Url::to(['community']); ?>" class="user-avatar icon-famous icon-famous8">
					<img src="<?php echo $ul?>uploads/<?php echo Yii::$app->user->identity->useimg;?>">
					</a> 
                    <?php   endif;?> 


                    <?php if ($trends['lmusicid']==0) {
                    	echo "<i class='type type0'></i>";
                    }else{
                    	echo "<i class='type type1'></i>";
                    	}?>
					

				</div> 
				<div class="feed-one-right">
					<div class="more-btn">
						<div class="panel">
							<a href="#/feed/91131777">查看</a> <!---->
						</div>
					</div> 
					<h2 class="user-vip user-vip-0">

                      <?php   if (array_key_exists("addtion",$trend[$b])):?> 
                      	<?php $user=$trend[$b]['user'];foreach ($user as $users):?>
						<a href="<?= Url::to(['user/auser', 'id'=>$users['id']]); ?>"><?php echo $users['username'];?></a>
						<?php  endforeach; ?>
                        <?php  endif;?>  


                       <?php   if (!array_key_exists("addtion",$trend[$b])):?> 
						<a href="<?= Url::to(['community']); ?>"><?php echo Yii::$app->user->identity->username;?></a>
                        <?php  endif;?>  
					</h2> 
					<span><?php echo $trends['time'];?> <i style="color: rgb(255, 255, 255);"></i></span> 
					<!---->  
					<p><?php if ($trends['trends']) {
						echo $trends['trends'];
					     }
					     ?></p> 
					<!----> <!----> 

					<ul class="pics pic-1">
						<li>
						<?php if ($trends['img']) {
						echo "<img src=\"".$ul.'uploads/'.$trends['img']."\">";
					     }
					     ?>
						</li>
					</ul>  
                     
					
                       <?php   if (!array_key_exists("addtion",$trend[$b])):?> 

						<?php $user=$trend[$b]['auser'];foreach ($user as $users):?>
					<aside class="audio haspic">
						<div class="cover">
							<a href="<?= Url::to(['user/auser', 'id'=>$users['id']]); ?>">
								<img src="<?php echo $ul?>uploads/<?php echo $users['useimg'];?>">
							</a>
						</div>
                  
						<div class="hgroup">
							<h4>
								<a href="#/sound/1388703"><?php echo $users['username'];?></a>
							</h4>
							<span class="counts"><?php echo $users['introduction'];?></span> 
							<span class="counts">有人关注了TA</span>
						</div>

						
					</aside>
			    	<?php  endforeach; ?>
					<?php  endif;?>  

					<?php  $music=$trend[$a]['musicModel'];$a++;foreach ($music as $musics):?>
					<aside class="audio haspic">
						<div class="cover">
							<a href="#/sound/1388703">
								<img src="<?php echo $ul?>uploads/<?php echo $musics['img'];?>">
							</a>
						</div>
                  
						<div class="hgroup">
							<h4>
								<a href="#/sound/1388703"><?php echo $musics['musictitle'];?></a>
							</h4>
							<span class="counts">时长：<?php echo $musics['duration'];?></span> 
							<span class="counts">播放：353次</span>
						</div>

						<i data-sid="1388703" class="audio-btn pause js-mp-play-one"></i>
					</aside>
					<?php endforeach;?> 

					<!---->  <!---->  <!---->  <!---->  <!---->  <!---->
				</div>
			</div> <!----> 

			<section class="v-feed-status">
				<div class="comment-bar">
					<a data-method="relay" class="">
						<i class="icon-share">

						</i> 
						<span>0</span>
					</a> 
					<a data-method="like" class="">
						<i class="icon-love"></i> 
						<span>804</span>
					</a> 
					<a data-method="comment" class="last"><i class="icon-comment"></i> 
						<span>7</span>
					</a>
				</div> <!---->
			</section>
		</div>
	
		<?php endforeach;?>
	</section> 
	<div class="listpage" style="text-align:-webkit-center;">
				<?= LinkPager::widget(['pagination' => $pages]); ?>
			</div>

</section>