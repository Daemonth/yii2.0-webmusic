<?php
namespace backend\models;

use yii\base\Model;
use common\models\ChannelModel;

/**
 * Signup form
 */
class ChannelForm extends Model
{
    public $channelname;
    public $img;
    public $pid;
 
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function addchannel()
    {
        //SHIW
        if (!$this->validate()) {
            return null;
        }
        $channel= new ChannelModel();
        $channel->channelname = $this->channelname;
        $channel->img = $this->img;
        $channel->pid= $this->pid;

        var_dump($this->channelname);

        return $channel->save() ? $channel : null;
    }
}
