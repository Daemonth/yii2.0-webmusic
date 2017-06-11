<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Index';
$this->params['breadcrumbs'][] = $this->title;
?>
<body onselectstart="return false"> 

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
        <div class="echo-common sound-hot">
            <div class="big-title">
                <span class="fl">最新回声榜</span> 
                <span class="fr"><a href="#/rank/sound-hot">进入榜单</a></span>
            </div> 
            <div class="sound-list clearfix">
                <div class="index1 clearfix">
                    <a href="#/rank/sound-hot">

                        <img src="<?php echo $ul?>static/img/b6718ed159e896bde882ba27b7b98015.png" class="title_bg">
                    </a> 
                        <a href="<?= Url::to(['channel/mplay', 'id'=>$music[0][ 'id']]); ?>">
                            <img src="<?php echo $ul?>uploads/<?php echo $music[0]['img'];?>" class="sound-bg">
                        </a> 
                        <div class="info">
                            <span class="top-index">TOP 1</span>
                            <a href="<?= Url::to(['channel/mplay', 'id'=>$music[0][ 'id']]); ?>"><p><?php echo $music[0]['musictitle'];?></p></a> 
                            <div class="user-info clearfix">
                             
                                 <?php $user=$music[0]['user'];?>
                                 <a href="<?= Url::to(['user/auser', 'id'=>$user[0]['id']]); ?>">
                                 <img src="<?php echo $ul?>uploads/<?php echo $user[0]['useimg'];?>">
                                 <span><?php echo $user[0]['username'];?></span>
                             </a>
                         </div>
                     </div>
                 </div><!----><!----> 
                 <div class="index23">
                  <ul><!---->
                 
                      <li>
                          <a href="<?= Url::to(['channel/mplay', 'id'=>$music[1][ 'id']]); ?>">
                              <img src="<?php echo $ul?>uploads/<?php echo $music[1]['img'];?>">
                          </a>
                          <div class="sound-info">
                           <div class="title clearfix">
                               <i class="index">2</i>
                               <a href="<?= Url::to(['channel/mplay', 'id'=>$music[1][ 'id']]); ?>">
                                <span><?php echo $music[1]['musictitle'];?></span>
                            </a>
                        </div>
                        <a href="#/user/29596">
                         <p><?php $user1=$music[1]['user'];echo $user1[0]['username'];?></p>
                     </a>
                 </div>
             </li>
             <li>
                 <a href="<?= Url::to(['channel/mplay', 'id'=>$music[2][ 'id']]); ?>">
                     <img src="<?php echo $ul?>uploads/<?php echo $music[2]['img'];?>">
                 </a> 
                 <div class="sound-info">
                     <div class="title clearfix">
                         <i class="index">3</i> 
                         <a href="<?= Url::to(['channel/mplay', 'id'=>$music[2][ 'id']]); ?>">
                             <span><?php echo $music[2]['musictitle'];?></span>
                         </a>
                     </div> 
                     <a href="#/user/6818876"><p><?php $user2=$music[2]['user'];echo $user2[0]['username'];?></p></a>
                 </div>
             </li>
         </ul>
     </div>
 </div>
</div>
     
     <div class="echo-common sound-hot">
            <div class="big-title">
                <span class="fl">热门周榜</span> 
                <span class="fr"><a href="#/rank/sound-hot">进入榜单</a></span>
            </div> 
            <div class="sound-list clearfix">
                <div class="index1 clearfix">
                    <a href="#/rank/sound-hot">
                        <img src="<?php echo $ul?>static/img/5735c4af669429c7b43cbd3fe165d0bf.png" class="title_bg"></a> 
                        <a href="<?= Url::to(['channel/mplay', 'id'=>$hotmusic[0][ 'id']]); ?>">
                            <img src="<?php echo $ul?>uploads/<?php echo $hotmusic[0]['img'];?>" class="sound-bg">
                        </a> 
                        <div class="info">
                            <span class="top-index">TOP 1</span>
                            <a href="<?= Url::to(['channel/mplay', 'id'=>$hotmusic[0][ 'id']]); ?>"><p><?php echo $hotmusic[0]['musictitle'];?></p></a> 
                            <div class="user-info clearfix">
                             <a href="#/user/29596">
                             <?php $user=$hotmusic[0]['user'];?>
                                 <img src="<?php echo $ul?>uploads/<?php echo $user[0]['useimg'];?>">
                                 <span><?php echo $user[0]['username'];?></span>
                             </a>
                         </div>
                     </div>
                 </div><!----><!----> 
                 <div class="index23">
                  <ul><!---->
                      <li>
                          <a href="<?= Url::to(['channel/mplay', 'id'=>$hotmusic[1]['id']]); ?>">
                              <img src="<?php echo $ul?>uploads/<?php echo $hotmusic[1]['img'];?>">
                          </a>
                          <div class="sound-info">
                           <div class="title clearfix">
                               <i class="index">2</i>
                               <a href="<?= Url::to(['channel/mplay', 'id'=>$hotmusic[1][ 'id']]); ?>">
                                <span><?php echo $hotmusic[1]['musictitle'];?></span>
                            </a>
                        </div>
                        <a href="#/user/29596">
                         <p><?php $user=$hotmusic[1]['user'];echo $user[0]['username'];?></p>
                     </a>
                 </div>
             </li>
             <li>
                 <a href="<?= Url::to(['channel/mplay', 'id'=>$hotmusic[2][ 'id']]); ?>">
                     <img src="<?php echo $ul?>uploads/<?php echo $hotmusic[2]['img'];?>">
                 </a> 
                 <div class="sound-info">
                     <div class="title clearfix">
                         <i class="index">3</i> 
                         <a href="#/sound/1396849">
                             <span><?php echo $hotmusic[2]['musictitle'];?></span>
                         </a>
                     </div> 
                     <?php $user=$hotmusic[2]['user'];?>
                     <a href="<?= Url::to(['user/auser', 'id'=>$user[0]['id']]); ?>"><p><?php echo $user[0]['username'];?></p></a>
                 </div>
             </li>
         </ul>
     </div>
 </div>
</div>


<div class="echo-common sound-hot">
            <div class="big-title">
                <span class="fl">热门月榜</span> 
                <span class="fr"><a href="#/rank/sound-hot">进入榜单</a></span>
            </div> 
            <div class="sound-list clearfix">
                <div class="index1 clearfix">
                    <a href="#/rank/sound-hot">
                        <img src="<?php echo $ul?>static/img/b6718ed159e896bde882ba27b7b98015.png" class="title_bg"></a> 
                        <a href="<?= Url::to(['channel/mplay', 'id'=>$Mhotmusic[0][ 'id']]); ?>">
                            <img src="<?php echo $ul?>uploads/<?php echo $Mhotmusic[0]['img'];?>" class="sound-bg">
                        </a> 
                        <div class="info">
                            <span class="top-index">TOP 1</span>
                            <a href="<?= Url::to(['channel/mplay', 'id'=>$Mhotmusic[0][ 'id']]); ?>"><p><?php echo $Mhotmusic[0]['musictitle'];?></p></a> 
                            <div class="user-info clearfix">
                            
                               <?php $user=$Mhotmusic[0]['user'];?>
                                <a href="<?= Url::to(['user/auser', 'id'=>$user[0]['id']]); ?>">
                                 <img src="<?php echo $ul?>uploads/<?php echo $user[0]['useimg'];?>">
                                 <span><?php echo $user[0]['username'];?></span>
                             </a>
                         </div>
                     </div>
                 </div><!----><!----> 
                 <div class="index23">
                  <ul><!---->
                      <li>
                          <a href="<?= Url::to(['channel/mplay', 'id'=>$Mhotmusic[1][ 'id']]); ?>">
                              <img src="<?php echo $ul?>uploads/<?php echo $Mhotmusic[1]['img'];?>">
                          </a>
                          <div class="sound-info">
                           <div class="title clearfix">
                               <i class="index">2</i>
                               <a href="<?= Url::to(['channel/mplay', 'id'=>$Mhotmusic[1][ 'id']]); ?>">
                                <span><?php echo $Mhotmusic[1]['musictitle'];?></span>
                            </a>
                        </div>
                        <?php $user=$Mhotmusic[1]['user'];?>
                        <a href="<?= Url::to(['user/auser', 'id'=>$user[0]['id']]); ?>">
                         <p><?php echo $user[0]['username'];?></p>
                     </a>
                 </div>
             </li>
             <li>
                 <a href="<?= Url::to(['channel/mplay', 'id'=>$Mhotmusic[2][ 'id']]); ?>">
                     <img src="<?php echo $ul?>uploads/<?php echo $Mhotmusic[2]['img'];?>">
                 </a> 
                 <div class="sound-info">
                     <div class="title clearfix">
                         <i class="index">3</i> 
                         <a href="<?= Url::to(['channel/mplay', 'id'=>$Mhotmusic[2][ 'id']]); ?>">
                             <span><?php echo $Mhotmusic[2]['musictitle'];?></span>
                         </a>
                     </div> 
                     <?php $user=$Mhotmusic[2]['user'];?>
                     <a href="<?= Url::to(['user/auser', 'id'=>$user[0]['id']]); ?>"><p><?php echo $user[0]['username'];?></p></a>
                 </div>
             </li>
         </ul>
     </div>
 </div>
</div>

<div class="u-title u-title-1 f-cb m-record-title" id="rHeader" style="margin: 0 auto;width: 69%">
    <h3><span class="f-ff2 s-fc3">今天推荐</span></h3>
    
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

<div class="chan-exp" style="margin-left: 46px;">
    <div class="chan-exppopular clearfix ">
        <ul class="chan-exppopular-list ">
          <?php $i=0;foreach ($music as $musics):?> 
            <li class="chan-exppopular-box">
                <div class="pic">
                    <a href="<?= Url::to(['channel/mplay','id'=>$musics['id']]); ?>">
                        <img src="<?php echo $ul?>uploads/<?php echo $musics['img'];?>">
                    </a>
                    <div class="duration">
                        <i id="playbtn"></i><?php echo $musics['duration'];?>
                    </div>
                </div> 
                <a href="<?= Url::to(['channel/mplay','id'=>$musics['id']]); ?>" id="song-name"><?php echo $musics['musictitle'];?></a> 
                <?php $schannel=$music[$i]['channelModel'];$i++;foreach ($schannel as $schannels):?>
                <h4><a href="#/channel/1155"><?php echo $schannels['channelname'];?></a>频道</h4>
                <?php endforeach;?>
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
        </ul> 
        
    </div>
</div>





    </div>

</section>
            
</div>
</div>
</main>
</body>


<?php $this->beginBlock('test') ?>  
$(function(){
// 初始化轮播
Caroursel.init($('.caroursel'));
$("#myCarousel").carousel('cycle');
});
<?php $this->endBlock() ?>  
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>