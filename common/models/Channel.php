<?php

namespace common\models;

use Yii;
use yii\base\Model;
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
class Channel extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'channel';
    }
    public static function findByChannelname($channelname)
    {
        return static::findOne(['channelname' => $channelname, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           /* [['name', 'type'], 'required'],
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['description', 'data'], 'string'],
            [['name', 'rule_name'], 'string', 'max' => 64],
            [['rule_name'], 'exist', 'skipOnError' => true, 'targetClass' => AuthItem::className(), 'targetAttribute' => ['rule_name' => 'name']],*/
        ];
    }

    /**
     * @inheritdoc
     */
    
}
