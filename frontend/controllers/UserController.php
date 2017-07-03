<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\UserForm;
use yii\web\UploadedFile;
use common\models\MusicModel;
use common\models\Umtable;
use common\models\Addtion;
use common\models\User;
use common\models\Trends;


class  UserController extends Controller
{   
    public $enableCsrfValidation = false;
	//个人主页
    public function actionIndex(){
       $ul=Yii::$app->homeUrl;
       $id=Yii::$app->user->identity->id;
       $user=user::getById($id);
       $music1=MusicModel::getMusicByLLT($id);

       $sender1=Yii::$app->user->identity->id;
       $music=MusicModel::getMusicBySd($sender1);

       $count=Addtion::getByAdd($id);
       $count1=Addtion::getByAID($id);
       $count2=Trends::getCUseid($id);
       return $this->render('index', ['music'=>$music,'music1'=>$music1,'user'=>$user,'ul'=>$ul,'count'=>$count,'count1'=>$count1,'count2'=>$count2]);

    }

   //喜欢的歌曲详情
    public function actionLmusic($id){
       $ul=Yii::$app->homeUrl;
      
       $music=MusicModel::getMusicByLT($id);
       $channel= MusicModel::getMusicBySLT($id);
       if ($music) {
             $i=0;
             foreach ($channel as $k => $v){
             $count[$i]=Umtable::getByLmusicidT($v['id']);
             $i++;
           }
            return $this->render('smusic', ['music'=>$music,'ul'=>$ul,'channel'=>$channel,'count'=>$count]);
       }
      
       return $this->render('smusic', ['music'=>$music,'ul'=>$ul,'channel'=>$channel]);

    }
        //详情
    public function actionSmusic($id){
       $ul=Yii::$app->homeUrl;
       
       $music1=MusicModel::getMusicBySd($id);
       $channel= MusicModel::getMusicBySdC($id);
      if ($music1) {
        $i=0;
       foreach ($channel as $k => $v){
             $count[$i]=Umtable::getByLmusicidT($v['id']);
             $i++;
         }

         return $this->render('lmusic', ['music1'=>$music1,'ul'=>$ul,'channel'=>$channel,'count'=>$count]);
       }


       return $this->render('lmusic', ['music1'=>$music1,'ul'=>$ul,'channel'=>$channel]);
       
    }



     //更新个人信息
    public function actionUpuse(){
      $model= new UserForm();

      if (Yii::$app->request->isPost) {
        $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
        $model->useimg=$model->imageFile;
        
        if ($model->upload()) {

          if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if ($model->updateU()) {

              return $this->render('upuse', ['model' => $model]);
            }

          }
        }

      }
      return $this->render('upuse',['model'=>$model]);
    }

    //关注的页面
    public function actionAuser($id){
      $id=['id'=>$id];
      $ul=Yii::$app->homeUrl;
      $music=MusicModel::getMusicByCU($id);
      $lmusic=Umtable::getByMU($id);

      $count=Addtion::getByAdd($id);
      $count1=Addtion::getByAID($id);

      return $this->render('auser',['music'=>$music,'ul'=>$ul,'lmusic'=>$lmusic,'count'=>$count,'count1'=>$count1,'id'=>$id]);
    }


     //点击关注
    public function actionAddtion(){
      $auseid=$_POST['auseid'];
      $trends=new Trends();
      $trends->auseid=$auseid;
      $trends->useid=Yii::$app->user->identity->id;
      $trends->time=date('Y-m-d  h:i:sa');
      $trends->save();
      return $this->render('addtion');
    }



}