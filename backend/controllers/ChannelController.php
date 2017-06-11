<?php

namespace backend\controllers;

use Yii;
use common\models\ChannelModel;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use backend\models\ChannelForm;
use backend\models\ItemForm;
use yii\helpers\Json;
use common\models\UploadForm;
use yii\web\UploadedFile;


class ChannelController extends Controller
{
     /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    //显示主频道的信息
    public function actionIndex()
    {
         $channel=ChannelModel::findzpd();
          
         return $this->render('index', ['channel' => $channel]);
      
    }


 //文件上传
public function actionUpload()
{
     $model = new UploadForm();    
        if (Yii::$app->request->isPost) {  
              $model->file = UploadedFile::getInstance($model, 'file');
                      if ($model->file && $model->validate()) {   
                               $model->file->saveAs('../uploads/' . $model->file->baseName . '.' . $model->file->extension);
                                       } 
                                          }   
         return $this->render('upload', ['model' => $model]);
   
}




 
public function actionAddchel(){
    
    $Channel=ChannelModel::getAllchannels();
    // $model1 = new UploadForm();
    $model= new ChannelForm();
    $addchel = new ChannelModel();
    //定义场景
   /* $model->setScenario(ChannelForm::SCENARIOS_CREATE);*/
    if (Yii::$app->request->isPost) {
      
        // if ($model1->load(Yii::$app->request->post(),'')) {
           
        if ($model->load(['ChannelForm'=>Yii::$app->request->post()],'ChannelForm')&& $model->validate()) {
         $addchel->channelname = $_POST['channelname'];
         $addchel->img =$_POST['ChannelForm']['img'];
         $addchel->pid=$_POST['pid'];;
         $addchel->save();
         
        }
         return $this->render('addchel', ['model' => $model,'channel'=>$Channel]);
    }
         return $this->render('addchel', ['model' => $model,'channel'=>$Channel]);
       
}


public function test(){
     $test=new ChannelForm();
     var_dump($test);
     return $this->render('test');

}

  public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ]
        ];
    }

}