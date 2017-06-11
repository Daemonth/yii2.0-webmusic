<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trends".
 *
 * @property integer $id
 * @property string $trends
 * @property string $img
 * @property integer $musicid
 * @property integer $useid
 * @property integer $auseid
 */
class Trends extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trends';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['useid', 'auseid'], 'integer'],
            [['trends'], 'string', 'max' => 50],
            [['img'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'trends' => 'Trends',
            'img' => 'Img',
            'musicid' => 'Musicid',
            'useid' => 'Useid',
            'auseid' => 'Auseid',
        ];
    }

         /**
     * @动态查询
     */

      public static function getTrendsByT(){
        $useid =['useid' => Yii::$app->user->identity->id];
        $res=self::find()->asArray()->joinwith('musicModel')->joinwith('user')->where($useid)->orderBy('time DESC')->all();
        $Trends=$res;
        return $Trends;
    }
          /**
     * @动态查询
     */

      public static function getTrendsByST(){
        $useid =['useid' => Yii::$app->user->identity->id];
        $res=self::find()->asArray()->joinwith('musicModel')->join('LEFT JOIN', 'addtion', 'addtion.auseid= trends.useid')->where(['addtion.useid' => $useid])->orderBy('time DESC')->all();
        $Trends=$res;
        return $Trends;
    }
 
    /**
     * @动态统计
     */

      public static function getCUseid($id){
        $useid =['useid' =>$id];
        $res=self::find()->asArray()->where($useid)->count();
        $Trends=$res;
        return $Trends;
    }

     //获取频道
    public function getMusicModel()
    {
        return $this->hasMany(MusicModel::className(), ['musictitle' => 'musicid','sender'=>'useid']);
    }


       //获取统计
    public function getUser()
    {
        return $this->hasMany(User::className(), ['id' => 'useid']);
    }
         //获取关注用户的
    public function getAddtion()
    {
        return $this->hasMany(Addtion::className(), ['auseid'=>'useid']);
    }
        //获取统计
    public function getAuser()
    {
        return $this->hasMany(User::className(), ['id' => 'auseid']);
    }
}
