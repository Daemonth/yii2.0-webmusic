<?php

namespace common\models;

use Yii;
/**
 * This is the model class for table "auth_item".
 *
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $rule_name
 * @property string $data
 * @property integer $created_at
 * @property integer $updated_at
 */
class Music extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'music';
    }
  


    /**
     * @推荐音乐
     */

   public function getpushM(){
        $res=self::find()->asArray()->all();
        $musics=$res;
        return $musics;
   }
    /**
     * @inheritdoc
     */
    
}
