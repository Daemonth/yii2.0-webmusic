<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "channel".
 *
 * @property integer $id
 * @property string $channelname
 * @property string $img
 * @property integer $pid
 */
class ChannelModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'channel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['channelname', 'img', 'pid'], 'required'],
            [['pid'], 'integer'],
            [['channelname', 'img'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'channelname' => 'Channelname',
            'img' => 'Img',
            'pid' => 'Pid',
        ];
    }

    public static function getAllchannels(){
        
            
        $res=self::find()->asArray()->all();
        if ($res) {
            $channels=$res;
        }else{
            $channels=array(
                [0]=>array(
                    "channelname"=>"暂无分类" 
                )
            );
        }
        return $channels;
    }
     /**
     * Finds user by id
     *
     * @param string $id
     * @return static|null
     */
    public static function findById($bid)
    {
        $id = ['id' => $bid]; 
        $res=self::find()->asArray()->where($id)->all();
        $channels=$res;
        return $channels;
    }

     /**
     * Finds user by pid
     *
     * @param string $pid
     * @return static|null
     */
    public static function findByPid($bid)
    {
        $pid = ['pid' => $bid]; 
        $res=self::find()->asArray()->where($pid)->all();
        $channels=$res;
        return $channels;
    }
     /**
     * 主频道
     *
     */
    public static function findzpd()
    {   
        $pid=['pid'=>0];
        $res=self::find()->asArray()->where($pid)->all();
        $channels=$res;
        return $channels;
    }
     /**
     * 主频道
     *
     */
    public static function findCpd()
    {   
        
        $res=self::find()->asArray()->where(['<>','pid',0])->all();
        $channels=$res;
        return $channels;
    }
     /**
     * 分频道
     *
     */
     public static function findfpd($bid)
    {   
        $pid=['pid'=>$bid];
        $res=self::find()->asArray()->where($pid)->all();
        $channels=$res;
        return $channels;
    }


     /**
     * 热门频道
     *
     */
    public static function findHotC()
    {   
        $is_hot=['is_hot'=>1];
        $res=self::find()->asArray()->where($is_hot)->all();
        $channels=$res;
        return $channels;
    }

    /**
     * 分页其他频道
     *
     */
    public static function getchannels(){
        $is_hot=['is_hot'=>0];
        $res=self::find()->asArray()->where($is_hot)->all();
        $channels=$res;
        return $channels;
    }
}
