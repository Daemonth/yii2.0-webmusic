<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "addtion".
 *
 * @property integer $id
 * @property integer $useid
 * @property integer $auseid
 */
class Addtion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addtion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['useid', 'auseid'], 'required'],
            [['useid', 'auseid'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'useid' => 'Useid',
            'auseid' => 'Auseid',
        ];
    }
          //@统计关注的数
    public static function getByAdd($id){
        $useid=['useid' => $id];
        $res=self::find()->asArray()->where($useid)->count();
        $users=$res;
        return $users;
    }
      //@统计被关注的
     public static function getByAID($id){
        $auseid=['auseid' => $id];
        $res=self::find()->asArray()->where($auseid)->count();
        $users=$res;
        return $users;
    }
}
