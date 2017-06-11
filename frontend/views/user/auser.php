<?php
use yii\helpers\Url;
$cssString = ".container {
	width: 1240px;
}
.star-container-wrap .star-container {
	width: 1170px;

}
";  
$this->registerCss($cssString); 

?>

<main class="main-center100">
	<div class="star-container-wrap">
		<div class="vue-loading" style="display: none;">
			Loading...
		</div> 
		<div>

	
		<?php $user=$music[0]['user'];foreach ($user as $users):?>
			<div class="star-banner-wp">
				<div class="star-banner">
					<div class="filter-bg" style="background-image: url(&quot;<?php echo $ul?>uploads/<?php echo $users['useimg'];?>&quot;);">

					</div> 
					<div class="filter-bg-black"></div> 
					<div class="banner-cont">
						<div class="pics clearfix">
							<a href="#/user/photo?id=3179577" class="pic-list pics-more">
								<span>+1</span>
								<span>相册</span>
							</a> 
							<a href="#/user/photo?id=3179577" class="pic-list">
								<img src="https://ws-qn-echo-image-cdn.app-echo.com/e5fb6f79f1deb0104ca7563f6eb35ef4.png?imageMogr2/auto-orient/quality/100">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="star-container">
				<div class="user-info-wp clearfix">
					<div class="user-info-left">
						<div class="Avatar">
							<img src="<?php echo $ul?>uploads/<?php echo $users['useimg'];?>">
						</div>
						
							<div class="user-info-1 clearfix">
								<div class="identity">
									<p class="user-name"><?php echo $users['username'];?></p>
									<p class="user-job clearfix">
										<i class="v-icon">
											<img src="/images/V2x.png">
										</i> 
										<span class="text">
											<?php echo $users['introduction'];?>
										</span>
									</p> 
									<p class="constellation-country clearfix">
										<i class="gender-icon">
											<img src="/v/app/assets/images/star/male.png">
										</i> 
										<span class="text">水瓶座<span class="line">｜</span><?php echo $users['city'];?></span>
									</p>
								</div> 
								<div class="follow-wp">
									<div class="list-item followed">
										<span class="num"><?php echo $count1;?></span> 
										<span class="text">被关注</span>
									</div> 
									<div class="list-item follow">
										<span class="num"><?php echo $count;?></span> 
										<span class="text">关注</span>
									</div> 
									<div class="list-item fans">
										<div class="fans-cont">
											<span class="fans-list" style="left: 0px; z-index: 3;">
												<img src="https://al-qn-echo-image-cdn.app-echo.com/58015122a2b4f97ef9a770792ac5ba3c74cb6926?imageMogr2/auto-orient/quality/100%7CimageMogr2/thumbnail/!100x100r/gravity/Center/crop/100x100/dx/0/dy/0">
											</span>
											<span class="fans-list" style="left: 20px; z-index: 2;">
												<img src="https://qn-qn-echo-image-cdn.app-echo.com/FlyKiFmJOrAwyoMsx35JoDfu7hpx?imageMogr2/auto-orient/quality/100%7CimageMogr2/thumbnail/!100x100r/gravity/Center/crop/100x100/dx/0/dy/0">
											</span>
											<span class="fans-list" style="left: 40px; z-index: 1;">
												<img src="https://qn-qn-echo-image-cdn.app-echo.com/87dac6b674824b0f5acc70da3ae61a194492379c?imageMogr2/auto-orient/quality/100%7CimageMogr2/thumbnail/!100x100r/gravity/Center/crop/100x100/dx/0/dy/0">
											</span>
										</div>
										<p class="text">头号粉丝</p>
									</div>
								</div>
								<a href="#/user/edit" class="edit-info" style="display: none;">编辑资料</a> 
								<div class="follow-sign-wp clearfix">
									<span href="javascript:void(0);" class="sign-btn"></span> 
									<a href="javascript:void(0)" class="follow-btn no-follow clearfix" onclick="addation()">
										<span>+加关注</span>
									</a> 
								</div>  
							</div> 
							<div class="user-info-2">
								<div class="text">
									2015届上海音乐学院音乐戏剧系</div>
									<div class="text-clone" style="visibility: hidden;">
										2015届上海音乐学院音乐戏剧系</div> 
										<div class="user-info-more" style="display: none;">
											...<span class="more-btn">［更多］</span> 
											<div class="more-info" style="display: none;">
												<div class="more-info-cont">

													2015届上海音乐学院音乐戏剧系
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>

                            <?php endforeach;?>
                         
							<div class="my-echo-wp">
								<div class="title clearfix">
									<h2>TA的回声</h2>
									<a href="<?= Url::to(['smusic', 'id'=>$user[0]['id']]); ?>" class="more">查看更多</a>
								</div>
								<div class="cont-section-1 clearfix">
									<ul class="top1-5 clearfix">
                                     <?php $i=0; foreach ($music as $musics):?>
                                      <?php 

                                      if ($i>=0&&$i<=5) {
                                      	echo "
                                            <li class=''>
											<span class='ranking rankingGreen'>$i</span> 
											<img src=\"".$ul.'uploads/'.$musics['img']."\" alt='top-1' class='pic'> 
											<div class='pic-mask'></div>
											<p class='name'>\"".$musics['musictitle']."\"</p>
											<span class='like-count'>5020</span> 
											<a data-sid='1345166' class='sound-hot-play-btn js-mp-play-one'></a>
										</li>
                                      	";
                                      }else{}
                                      $i++;
                                      ?>
										
									  <?php endforeach;?>

									</ul>
								</div>
								<div class="cont-echo-section">
								 <?php $i=0; foreach ($music as $musics):?>
								    <?php $channel=$music[$i]['channelModel'];?>
								 <?php 
                                    
								    if ($i>=6&&$i<=14) {
								 	    echo "
                                        <div class='hot-list clearfix'>
										<span class='ranking'>$i</span>
										<i class='playing'></i>
										<img src=\"".$ul.'uploads/'.$musics['img']."\" class='hot-list-pic'>
										<div class='name-wp'>
											<a href='#/sound/1277683' class='name'>\"".$musics['musictitle']."\"</a> 
											<a data-sid='1277683' class='hot-list-btn play-btn js-mp-play-one'></a>
										</div> 
                                       
										
										<p class='channel'>\"".$channel[0]['channelname']."\"</p> 
										
                                        
										<span class='like'>462</span>
									</div>  
                                            
								 	    ";
								      }
								      $i++;
                                    ?>
									
                                     
								<?php endforeach;?>
									
							</div>

							<div class="my-echo-wp">
								<div class="title clearfix">
									<h2>TA喜欢的回声</h2>

									<a href="<?= Url::to(['lmusic', 'id'=>$user[0]['id']]); ?>" class="more">查看更多</a>
								</div>
								<div class="cont-section-1 clearfix">
									<ul class="top1-5 clearfix">
                                     <?php $j=0; foreach ($lmusic as $lmusics):?>
                                        <?php $lmusic1=$lmusics[$j]['musicModel'];$j++;foreach ($lmusic1 as $lmusic1s):?>
                                        <li class=''>
											<span class='ranking rankingGreen'>$j</span> 
											<img src=\"".$ul.'uploads/'.$lmusics['img']."\" alt='top-1' class='pic'> 
											<div class='pic-mask'></div>
											<p class='name'>\"".$lmusics['musictitle']."\"</p>
											<span class='like-count'>5020</span> 
											<a data-sid='1345166' class='sound-hot-play-btn js-mp-play-one'></a>
										</li>
                                      <?php endforeach;?>
                                     <?php endforeach;?>
									</ul>
								</div>	
							</div>
							 
							
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</main>

<?php $this->beginBlock('test') ?> 
function addation()
   {
    var data = {
                auseid: "<?php echo $user[0]['id'];?>",
            };

            $.ajax({ 
               type: "POST",
               url: "addtion.html",
               data: data,
               dataType: "json",
               success: function(data){


               }
           });
  }



<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
