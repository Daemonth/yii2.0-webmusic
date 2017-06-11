<?php
use yii\bootstrap\ActiveForm;

?>
<main class="main-center">
	<div class="sound sound-info">
		<section class="main clearfix">
			<nav>
				<a class="back">返回</a> 
				<div class="share">
					<span>分享</span> 
					<a href="javascript:void(0)" class="to-weixin"></a> 
					<a href="javascript:void(0)" class="to-weibo"></a>
				</div>
			</nav> 
			<?php $i=0;foreach ($mplay as $mplays):?>
			<div class="sound-title clearfix">
				<div class="title"><?php echo $mplays['musicname'];?></div> 
				<div class="sound-status">
					<h5>
						<a href="#/channel/112" class="back">即将上映</a>频道<span>100000+次</span>播放
					</h5>
					<div class="status">
						<div class="td share">91</div>
						<div class="td like">345</div>
						<div class="td comment">28</div>
					</div>
				</div>
			</div>
			<div class="sound-bullets-wp">
				<div class="sound-dm">
					<div id="dm-parentf">
						<div id="dm-parent" style="position: relative;">
							<canvas id="dm-canvas" width="1000" height="350" style="display: block; background-color: transparent; position: absolute; left: 0px; top: 0px; z-index: 30;">

							</canvas>
						</div> 
						<pre>
							danmu debug
							type : 1
							id : 1414121
							time : 22
							dm.timeline.length : 28
							dm._conf : {
							"type": 1,
							"source_id": 1414121,
							"time_part_no": 130
						}
						dm.visible : true
						dm.running : false
					</pre>
				</div>
			</div> 
			<div class="bg-mask-wp">
				<img src="<?php echo $ul?>uploads/<?php echo $mplays['img'];?>" class="pic"> 
				<div class="bg-mask">

				</div>
			</div> 
			<div class="sound-cover">
				<img src="<?php echo $ul?>uploads/<?php echo $mplays['img'];?>"> <!----> <!---->
			</div> <!----> 
			<div class="sound-controls clearfix">
				   
				   <div data-sid="743086" id="playbtn">
				   </div>

					<div id="currentTime">0:0</div>
					<div class="vmp-timeline">
						<div class="vmp-buffer"></div> 
						<div id="vmp-progress"></div>
					</div> 
					<div id="durationTime"><?php echo $mplays['duration'];?></div> 
					<i class="play-type loop"></i> 
					<div id="ldmusic">
					<?php 
                      if ($lmusic) {
                      	echo "<i class='icon-love1' id='lmusic' style='width:27px'></i>";
                      }else{
                      	echo "<i class='icon-love' id='lmusic'></i>";
                      }
					;?>
					</div>
					<div class="troggle-danmu">关闭弹幕</div>
				</div>
			</div> 
			<?php endforeach;?>
			<div class="user-ctrl-bar">
				<div class="tags-area clearfix">
					<div class="tags-list">
						<ul> 
						</ul> 
						<div class="addnew">添加标签</div>
					</div>
					<div class="adder-infos">
                        <?php $user=$mplay[$i]['user'];$i++;foreach ($user as $users):?>
						<a href="#/user/29596" class="adder-user-avatar user-avatar icon-famous icon-famousnull">
							<img src="<?php echo $ul?>uploads/<?php echo $users['useimg'];?>">
						</a>
						<div class="adder-text">

							<a href="#/user/29596" class="addername"><?php echo $users['username'];?></a> 
                            <?php endforeach;?>
							<small><?php echo $mplays['time'];?> 上传</small>
						</div>
					</div>
				</div> 
				<div class="user-comment clearfix">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
					<input type="text" placeholder="在00:22发个弹幕和评论" class="comment-input" name="CommentForm[comment]"> 
					<button class="btn-submit">发送</button>
                    <?php ActiveForm::end(); ?>
					<!--<div class="select-filter">特效</div>-->
				</div> 
				<div class="choose-filter-wp" style="display: none;">
					<section class="choose-filter">
						<div class="preview clearfix">
							<div class="prev-title">弹幕预览</div> 
							<div class="prev-content">
								<span class="author">北城以南²</span> 
								<span class="comment">请在上方输入您要发送的内容</span>
							</div>
						</div> 
						<div class="options clearfix">
							<div class="filter f-1">微微闪光<span>26</span>
							</div> 
							<div class="filter f-2">闪闪发光<span>50</span></div> 
							<div class="filter f-8">字体变大<span>50</span></div> 
							<div class="filter f-7">减慢速度<span>50</span></div>
							<div class="filter f-3">静止1秒<span>50</span></div> 
							<div class="filter f-4">静止5秒<span>88</span></div> 
							<div class="filter f-5">背景变色<span>88</span></div> 
							<div class="filter f-9">背景变色<span>88</span></div> 
							<div class="filter f-10">背景变色<span>88</span></div>
							<div class="filter f-11">背景变色<span>88</span></div> 
							<div class="filter f-12">背景变色<span>88</span></div> 
							<div class="filter f-13">背景变色<span>88</span></div>
						</div>
					</section>
				</div>
			</div>
		</section> <!----> 
		<section class="infos clearfix">
			<div class="lyrics"><h1>简介</h1> <!----> <!----> <!----> 
				<p class="infos"><?php echo $mplays['jianj'];?>


					<?php echo $mplays['musictitle'];?>


					演唱：<?php echo $mplays['musicer'];?>

					曲：<?php echo $mplays['zq'];?> 词：<?php echo $mplays['zc'];?>


					<?php echo $mplays['gc'];?>
				</p>
			</div> 
			<div class="comments">
				<h1>热门评论</h1> 
				<ul class="comment-area">
				<?php foreach ($comment as $comments):?>
					<li class="comment-list clearfix">
						<a href="#/user/34376" class="user-avatar user-avatar icon-famous icon-famousnull">
							<img src="<?php echo $ul?>static/img/<?php echo $comments['useimg'];?>"></a> 
							<div class="comment-inner-wp">
								<div class="user-info">
									<a href="#/user/34376" class="user-name"><?php echo $comments['usename'];?></a> 
									<span class="user-date"><?php echo $comments['time'];?></span>
								</div> 
								<p class="user-comment-info"><?php echo $comments['comment'];?></p> 
								<div class="status"><span>回复</span> <span id="zan">赞(2)</span>
								</div>
							</div>
						</li>
						<?php endforeach;?>
					</ul>
				</div>
			</section> 
			<section class="add-tags" style="display: none;">
				<div class="close">×</div> 
				<h1>添加标签</h1>
				<small class="rule">添加标签的回声会被更多人发现，用空格或回车进行分隔</small> 
				<div class="mf_container">
					<ol class="mf_list" aria-atomic="false" aria-live="polite" aria-multiselectable="true" id="mf_mf_input_list" role="listbox"></ol>
					<input type="text" name="mf_input" id="mf_input" autocomplete="off" autofocus="autofocus" class="mf_input" aria-owns="mf_mf_input_list" role="combobox" style="width: 0px;">
					<span class="mf_measure" style="font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; left: -9999px; letter-spacing: 0px; position: absolute; text-transform: none; top: -9999px; white-space: nowrap; width: auto; word-spacing: 0px;">---</span>
				</div>
				<h3>常用标签</h3> 
				<ul class="tags-list">
					<li>小清新</li>
					<li>爵士</li>
					<li>摇滚</li>
					<li>3D</li>
					<li>电子</li>
					<li>TFboy</li>
					<li>串烧</li>
					<li>民谣</li>
					<li>流行</li>
					<li>说唱</li>
				</ul> 
				<input type="submit" value="发送">
			</section>  <!---->
		</div>

	</main>
<?php $this->beginBlock('test') ?> 
	$(function(){
	var audio = document.createElement("audio");
	var currentTime= document.getElementById("currentTime");
	var playbtn= document.getElementById("playbtn");
	audio.src="<?php echo $ul?>sounds/<?php echo $mplays['sound'];?>";
	$('#playbtn').click(function(){
	if(audio.paused) {
               audio.play();
               var vmpprogress = document.getElementById("vmp-progress");
	           var interval = setInterval(function() {
	                var widthline =   Math.round(audio.currentTime)/Math.round(audio.duration) * 100;
	                vmpprogress.style.width = widthline + "%";
	                currentTime.innerHTML = parseInt(Math.round(audio.currentTime)/60)+ ":"+Math.round(audio.currentTime)%60;                 
	            },1000);
	            playbtn.style.background ="url(../static/img/stop.png) 4px 1px no-repeat";
    }else{
                audio.pause();
	            playbtn.style.background ="url(../static/img/play.png) 1px 6px no-repeat";
    }

	});
});
$(function(){
    $('#lmusic').click(function(){
        var lmusic = document.getElementById("lmusic");
       
     
        if (lmusic.style.width == "") {
           var data = {
                musicid: "<?php echo $mplays['id'];?>",
                musictitle: "<?php echo $mplays['musictitle'];?>",
            };

            $.ajax({ 
               type: "POST",
               url: "lzmusic.html",
               data: data,
               dataType: "json",
               success: function(data){


               }
           });
           lmusic.style.width ="27px";
           lmusic.style.background ="url(../static/img/c09d1b90d8073c1a808f5f824a55cb31.png) 50% 50% no-repeat";
           

        }else if(lmusic.style.width == "27px") {
         var data = {
                dmusicid: "<?php echo $mplays['id'];?>",
                musicid: "0",
            };
           
            
            $.ajax({ 
               type: "POST",
               url: "lzmusic.html",
               data: data,
               dataType: "json",
               success: function(data){


               }
           });
         
           
          lmusic.style.width = "26px";
          
          lmusic.style.background ="url(../static/img/f3095678a2fabadc6353310f2ab2359b.png) 50% 50% no-repeat";
         

        }else if(lmusic.style.width == "26px") {
         var data = {
                musicid: "<?php echo $mplays['id'];?>",
            };

            $.ajax({ 
               type: "POST",
               url: "lzmusic.html",
               data: data,
               dataType: "json",
               success: function(data){


               }
           });
           lmusic.style.width ="27px";
           lmusic.style.background ="url(../static/img/c09d1b90d8073c1a808f5f824a55cb31.png) 50% 50% no-repeat";

        }



    });
});



<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>
