<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\User;
use yii\web\UploadedFile;
/**
 * Signup form
 */
class UserForm extends Model
{    
    public $imageFile;
    public $username;
    public $email;
    public $useimg;
    public $sex;
    public $city;
    public $Constellation;
    public $introduction;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
             ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 4, 'max' => 16],
            ['username', 'match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头。'],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 26],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            ['sex', 'trim'],
            ['city', 'trim'],
            ['useimg', 'trim'],
            ['Constellation', 'trim'],
            ['introduction', 'trim'],
        ];
    }
    //更新信息
       public function updateU()
    {
        if (!$this->validate()) {
            return null;
        }
        $id=Yii::$app->user->identity->id;
        $username = $this->username;
        $email = $this->email;
        $sex = $this->sex;
        $city = $this->city;
        $useimg =  time(). '.' . $this->imageFile->extension;
        $Constellation = $this->Constellation;
        $introduction = $this->introduction;

        user::updateAll(['username' => $username,'username' => $username,'email' => $email,'sex' => $sex,'city' => $city,'useimg' => $useimg,'Constellation' => $Constellation,'introduction' => $introduction], ['id'=>$id]); 

        return true; 
    }

    //上传文件
    public function upload()
    {          
             
             $this->imageFile->saveAs('uploads/' . time(). '.' . $this->imageFile->extension);
             return true; 
    }
    
}