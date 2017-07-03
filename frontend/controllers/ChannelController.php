<?php 
namespace frontend\controllers;

use Yii;

use yii\web\Controller;
use common\models\ChannelModel;
use common\models\Umtable;
use frontend\models\UmtableForm;
use common\models\MusicModel;
use yii\data\Pagination;
use common\models\Comment;
use frontend\models\CommentForm;


class ChannelController extends Controller
{
    public $enableCsrfValidation = false;
	/**
      * hot频道
     */
	public function actionIndex(){


         $ul=Yii::$app->homeUrl;
		     $zchannel=ChannelModel::findzpd();
         $curPage = Yii::$app->request->get('page',1);  //获取当前页
         $pageSize = 6;                 //设置每页显示条数
         $is_hot=['is_hot'=>1];
         $count=ChannelModel::find()->where($is_hot)->count();
         $pages = new Pagination(['totalCount' =>$count, 'pageSize' => $pageSize]);
         $data=ChannelModel::find()->where($is_hot);
         $music=MusicModel::getAllmusics();
         $hotchannel = $data->offset($pages->offset)->limit($pages->limit)->all();
		 return $this->render('index',['zchannel'=>$zchannel,'hotchannel'=>$hotchannel,'pages' => $pages,'ul'=>$ul,'music'=>$music]);
	}
	/**
      * 次频道
     */
	public function actionCpd($id){
        $ul=Yii::$app->homeUrl;
		   $zchannel=ChannelModel::findzpd();
        $curPage = Yii::$app->request->get('page',1);  //获取当前页
        $pageSize = 6;                 //设置每页显示条数
        $pid=['pid'=>$id];
        $count=ChannelModel::find()->where($pid)->count();
        $pages = new Pagination(['totalCount' =>$count, 'pageSize' => $pageSize]);
        $data=ChannelModel::find()->where($pid);
        $music=MusicModel::getAllmusics();
        $channel = $data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('cpd',['channel'=>$channel,'pages' => $pages,'zchannel'=>$zchannel,'ul'=>$ul,'music'=>$music]);
	}


     /**
      *详细音乐
     */
    public function  actionMusic($id){
        $ul=Yii::$app->homeUrl;
        $channel=ChannelModel::findById($id);
        $curPage = Yii::$app->request->get('page',1);  //获取当前页
        $pageSize = 6; 
        $channelid=['channelid'=>$id];
        $count=MusicModel::find()->where($channelid)->count();
        $pages = new Pagination(['totalCount' =>$count, 'pageSize' => $pageSize]);
        $data=MusicModel::find()->where($channelid);
        $music = $data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('music',['channel'=>$channel,'pages' => $pages,'music'=>$music,'ul'=>$ul]);
    }

    /** 插进json文件
     */
        public function  actionAddlist($songname){
           
 
            $songname=$_POST['songname'];
            $data = array();
            $data['a'] = 'test1';
            $data['b'] = 'bbb1';

           // 把PHP数组转成JSON字符串
            $json_string = json_encode($data);
            $filename='static/js/test.json';

            // 写入文件
            if (filesize($filename)=='0') {
                file_put_contents( $filename, $json_string);
            }else{
                file_put_contents( $filename, ','."\r".$json_string."\r",FILE_APPEND);
            } 

            
            return $this->render('addlist');

        }
        /**
        *音乐界面
     */
        public function  actionMplay($id){
           $lmusic=Umtable::getByLmusicid($id);
           $mplay=MusicModel::getByid($id);
           $comment=Comment::getByid($id);

           $ul=Yii::$app->homeUrl;
           $model=new CommentForm();
           $model->musicid=$id;
           if ($model->load(Yii::$app->request->post()) && $model->validate()) {
              
            if ($model->addcomment()) {

                     
                       return $this->render('mplay', ['model' => $model,'mplay'=>$mplay,'ul'=>$ul,'comment'=>$comment,'lmusic'=> $lmusic]);
                   }
           }
           return $this->render('mplay',['mplay'=>$mplay,'ul'=>$ul,'comment'=>$comment,'lmusic'=> $lmusic]);

          
        }
          /**
        *喜欢的音乐
     */
        public function  actionLzmusic(){
            if ($_POST['musicid']=="0") {//添加喜欢
             $lmusicid=$_POST['dmusicid'];
             $delete=new Umtable();

             $delete->deleteAll(['lmusicid'=>$lmusicid,'useid'=>Yii::$app->user->identity->id]);

             if ($delete) {
                echo "sucess";
            }

            }else{//删除喜爱

               $lmusicid=$_POST['musicid'];
               $musictitle=$_POST['musictitle'];
               $model=new UmtableForm();
               $model->lmusicid=$lmusicid;  
               $model->smusicid='0';
               $model->musictitle=$musictitle;
               if ($model->addumtable()) {  
                   echo "sucess";
               }
           }

       }





}