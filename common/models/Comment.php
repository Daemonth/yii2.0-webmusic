<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property integer $comment
 * @property string $useimg
 * @property integer $usename
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment', 'useimg', 'usename'], 'required'],
            [['useimg'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comment',
            'useimg' => 'Useimg',
            'usename' => 'Usename',
        ];
    }
    //根据ID获取评论
     public static function getByid($id)
    { 
        $musicid = ['musicid' => $id];
        $res=self::find()->asArray()->where($musicid)->all();
        $comments=$res;
        return $comments;
    }
}
