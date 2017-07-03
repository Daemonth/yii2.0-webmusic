<?php
$cssString = ".container {
    width:100%;
}
.wrap {
    background: #fff;
}
#w0-collapse{
    width: 65%;
    margin: 0 auto;
}
.headerv3 {
	height: 70px;
	box-shadow: 0px 0px 0px rgba(0,0,0,.04); 
}
.user-sound .user-top-w .sound-list {

    margin: -110px auto 20px;

    position: absolute;
    margin-left: 23%;
}
";  
$this->registerCss($cssString); 
?>
<main class="main-center100">
	<div class="user-sound user-common">
		<div class="user-top-w">
			<div class="intro-w clearfix">
				<div class="intro clearfix">
					<a href="#/user/9154317">
						<img src="<?php echo $ul?>uploads/<?php echo Yii::$app->user->identity->useimg;?>">
					</a> 
					<div class="avatar">
						<a href="#/user/9154317">
							<p><?php echo Yii::$app->user->identity->username;?></p>
						</a> 
						<span class="icon-famous-albums icon-famous-albums0"><!----></span>
					</div>
				</div> 
				<div data-sid="1424805,1418052,1322576,142089,1056403,1013654,683214,983116,1267042,150864,376501,75546,1321370,353350,324278,1331843,1334289,237553,1281249" class="play-all js-mp-play-one"></div> 
				<div class="num">我喜欢的回声·90</div> <!---->
			</div> 
			<div class="sound-list">
				<ul class="sound">
                  <?php $i=0;foreach ($music1 as $music1s):?>
					<li><span class="index">01</span> 
						<a href="#/sound/1424805">
							<img src="<?php echo $ul?>uploads/<?php echo $music1s['img'];?>">
						</a> 
						<a href="#/sound/1424805"><p><?php echo $music1s['musictitle'];?></p></a> 
						<div class="like-count">
							<i class="on"></i><?php echo $count[$i];?>
						</div>
						<a href="#/channel/112">
						<?php $schannel=$channel[$i]['channelModel'];$i++;foreach ($schannel as $schannels):?>
							<div class="channel"><?php echo $schannels['channelname'];?></div>
						<?php endforeach;?>
						</a> 
						<a data-sid="1424805" class="play js-mp-play-one"></a> 
					</li>
                   <?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</main>