<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\MusicModel;
use yii\web\UploadedFile;
use common\models\Trends;
use common\models\Addtion;
/**
 * Signup form
 */
class MusicForm extends Model
{
    public $img;
    public $musicname;
    public $channelid;
    public $imageFile;
    public $soundFile;
    public $musictitle;
    public $musicer;
    public $zj;
    public $zq;
    public $gc;
    public $jianj;
    public $sound;
    public $duration;
    public $time;
    public $zc;
    public $sender;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file'],
           
           /* ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 4, 'max' => 16],
            ['username', 'match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头。'],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 26],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['repassword', 'compare', 'compareAttribute' => 'password','message'=>'两次输入的密码不一致！'],
            [['password', 'repassword'],'required'],
            [['password', 'repassword'], 'string', 'min' => 6],*/
            ['sound', 'trim'],
            ['img', 'trim'],
            ['musicname', 'trim'],
            ['channelid', 'trim'],
            ['musictitle', 'required'],
            ['musictitle', 'trim'],
            ['musicer', 'trim'],
            ['zj', 'trim'],
            ['zq', 'trim'],
            ['zc', 'trim'],
            ['gc', 'trim'],
            ['jianj', 'trim'],
            ['duration', 'trim'],
            ['time', 'trim'],
            ['sender', 'trim'],

        ];
    }

     /**
     * @添加音乐
     */

     public function addmusic()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $music = new MusicModel();
        $music->img=$this->img;
        $music->musicname =$this->musicname;
        $music->channelid = '1';
        $music->musictitle=$this->musictitle;
        $music->musicer=$this->musicer;
        $music->sound=$this->sound;
        $music->zj=$this->zj;
        $music->zq=$this->zq;
        $music->gc=$this->gc;
        $music->jianj=$this->jianj;
        $music->duration=$this->duration;
        $music->time=date('Y-m-d');
        $music->sender=Yii::$app->user->identity->id;

        $trends=new Trends();
        $trends->img=$this->img;
        $trends->lmusicid=0;
        $trends->musicid=$this->musictitle;
        $trends->useid=Yii::$app->user->identity->id;
        $trends->time=date('Y-m-d  h:i:sa');
        $trends->save();

        return $music->save() ? $music : null;
    }

 public function upload()
    {
             $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
             $this->soundFile->saveAs('sounds/' . $this->soundFile->baseName . '.' . $this->soundFile->extension);
             return true; 
    }



}
