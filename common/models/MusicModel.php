<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "music".
 *
 * @property integer $id
 * @property string $musicname
 * @property integer $channelid
 * @property string $sound
 * @property string $musictitle
 * @property string $musicer
 * @property string $zj
 * @property string $zq
 * @property string $gc
 * @property string $jianj
 * @property string $img
 */
class MusicModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'music';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['musicname', 'channelid', 'sound', 'musictitle', 'musicer', 'zj', 'zq', 'gc', 'jianj', 'img'], 'required'],
        [['channelid'], 'integer'],
        [['musicname', 'sound', 'musictitle', 'musicer', 'zj', 'zq', 'img'], 'string', 'max' => 50],
        [['gc'], 'string', 'max' => 200],
        [['jianj'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
        'id' => 'ID',
        'musicname' => 'Musicname',
        'channelid' => 'Channelid',
        'sound' => 'Sound',
        'musictitle' => 'Musictitle',
        'musicer' => 'Musicer',
        'zj' => 'Zj',
        'zq' => 'Zq',
        'gc' => 'Gc',
        'jianj' => 'Jianj',
        'img' => 'Img',
        ];
    }
      /**
     * @推荐音乐
     */

      public static function getAllmusics(){
        $res=self::find()->asArray()->all();
        $musics=$res;
        return $musics;
    }
     /**
     * @热门音乐
     */

     public static function gethotm(){
        $res=self::find()->asArray()->orderBy('listers DESC')->limit(8)->all();
        $musics=$res;
        return $musics;
    }
   /**
     * @根据频道获取音乐
     */
    public static function getByPid($pid){
        $res=self::find()->asArray()->where($pid)->all();
        $musics=$res;
        return $musics;
    }
    /**
     *@根据id获取音乐
     */
    public static function getByid($pid){
        $id = ['id' => $pid];
        $res=self::find()->asArray()->joinwith('user')->where(['music.id' => $id])->all();
        $musics=$res;
        return $musics;
    }
    /**
     *@根据id时间获取音乐
     */
    public static function getByidT($pid){
        $id = ['id' => $pid];
        $res=self::find()->asArray()->orderBy('time DESC')->where($id)->all();
        $musics=$res;
        return $musics;
    }
      /**
     * @shijian paibu
     */

      public static function getMusicByT(){
        $res=self::find()->asArray()->joinwith('user')->joinwith('channelModel')->orderBy('time DESC')->all();
        $musics=$res;
        return $musics;
    }
     /**
     * @shijian paibu
     */

      public static function getMusicByS(){
        $date=date('Y-m-d',strtotime('-5 day'));
        $res=self::find()->asArray()->joinwith('user')->where(['>=', 'time', $date])->orderBy('sounder DESC')->limit(3)->all();
        $musics=$res;
        return $musics;
    }
    /**
     * @shijian paibu
     */

      public static function getMusicByM(){
        $date=date('Y-m-d',strtotime('-30 day'));
        $res=self::find()->asArray()->joinwith('user')->where(['>=', 'time', $date])->orderBy('sounder DESC')->limit(3)->all();
        $musics=$res;
        return $musics;
    }
    /**
     * @根据上传者查询
     */

      public static function getMusicBySd($sender1){
        $sender = ['sender' => $sender1];
        $res=self::find()->asArray()->where($sender)->orderBy('time DESC')->limit(8)->all();
        $musics=$res;
        return $musics;
    }
      /**
     * @根据上传者查询
     */

      public static function getMusicBySdC($sender1){
        $sender = ['sender' => $sender1];
        $res=self::find()->asArray()->joinwith('channelModel')->where($sender)->orderBy('time DESC')->all();
        $musics=$res;
        return $musics;
    }
      /**


      /**
     * @根据上传者查询
     */

      public static function getMusicBySdT($sender1){
        $sender = ['sender' => $sender1];
        $res=self::find()->asArray()->where($sender)->orderBy('time DESC')->all();
        $musics=$res;
        return $musics;
    }



     /**
     * @根据喜欢查询
     */

      public static function getMusicByLLT($id){
        
        $res=self::find()->asArray()->join('LEFT JOIN', 'umtable', 'umtable.lmusicid= music.id')->where(['umtable.useid' => $id])->orderBy('time DESC')->limit(8)->all();
        $musics=$res;
        return $musics;
    }
      /**
     * @根据喜欢查询
     */

      public static function getMusicByLT($id){
        
        $res=self::find()->asArray()->join('LEFT JOIN', 'umtable', 'umtable.lmusicid= music.id')->where(['umtable.useid' => $id])->orderBy('time DESC')->all();
        $musics=$res;
        return $musics;
    }
    /**
    * @根据喜欢查询
     */

      public static function getMusicBySLT($id){
        
        $res=self::find()->asArray()->join('LEFT JOIN', 'umtable', 'umtable.lmusicid= music.id')->where(['umtable.useid' => $id])->orderBy('time DESC')->joinwith('channelModel')->all();
        $musics=$res;
        return $musics;
    }

       /**
    * @关联频道表，用户表查询
     */

      public static function getMusicByCU($id){
        
        $res=self::find()->asArray()->joinwith('channelModel')->joinwith('user')->where(['user.id' => $id])->orderBy('time DESC')->all();
        $musics=$res;
        return $musics;
    }
   
    //获取频道
    public function getChannelModel()
    {
        return $this->hasMany(ChannelModel::className(), ['id' => 'channelid']);
    }
     //获取统计
    public function getUmtable()
    {
        return $this->hasMany(Umtable::className(), ['lmusicid' => 'id']);
    }
     //获取用户
    public function getUser()
    {
        return $this->hasMany(User::className(), ['id' => 'sender']);
    }

}
