<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "umtable".
 *
 * @property integer $id
 * @property integer $lmusicid
 * @property integer $smusicid
 */
class Umtable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'umtable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lmusicid', 'smusicid'], 'required'],
            [['lmusicid', 'smusicid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lmusicid' => 'Lmusicid',
            'smusicid' => 'Smusicid',
        ];
    }

     //@shijian paibu
     

      public static function getByLmusicid($id){
        $lmusicid=['lmusicid' => $id];
        $res=self::find()->asArray()->where($lmusicid)->all();
        $musics=$res;
        return $musics;
    }
    //@统计
     
   
      public static function getByLmusicidT($id){
        $lmusicid=['lmusicid' => $id];
        $res=self::find()->asArray()->where($lmusicid)->count();
        $musics=$res;
        return $musics;
    }
     //@查询用户喜爱的歌曲
     

      public static function getByUseId($id){
        $useid=['useid' => $id];
        $res=self::find()->asArray()->where($useid)->all();
        $musics=$res;
        return $musics;
    }
      //@查询用户喜爱的歌曲
     
      public static function getWithM(){
        $res=self::find()->asArray()->joinwith('musicModel')->orderBy('music.time DESC')->all();
        $musics=$res;
        return $musics;
    }

    //@根据USEid关联MUSIC和USe表
     
      public static function getByMU($id){
        $res=self::find()->asArray()->joinwith('musicModel')->joinwith('user')->where(['user.id' => $id])->orderBy('music.time DESC')->limit(5)->all();
        $musics=$res;
        return $musics;
    }
    //关联music查询
    public function getMusicModel()
    {
        return $this->hasMany(MusicModel::className(), ['id'=>'lmusicid']);
    }

        //关联User查询
    public function getUser()
    {
        return $this->hasMany(User::className(), ['id'=>'useid']);
    }
}
