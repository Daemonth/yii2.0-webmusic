<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\Trends;

/**
 * Signup form
 */
class TrendsForm extends Model
{
   
    public $trends;
    public $img;
    public $musicid;
    public $useid;
    public $auseid;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['trends', 'trim'],
            ['img', 'trim'],
            ['musicid', 'trim'],
            ['useid', 'trim'],
            ['auseid', 'trim'],
        ];
    }

 
}