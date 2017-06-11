<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\Umtable;
use common\models\Trends;
/**
 * Signup form
 */
class UmtableForm extends Model
{
   
    public $lmusicid;
    public $smusicid;
    public $useid;
    public $musictitle;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['lmusicid', 'trim'],
            ['smusicid', 'trim'],
        ];
    }
    //插进umtable
     public function addumtable()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $umtable = new Umtable();
        $umtable->lmusicid=$this->lmusicid;
        $umtable->smusicid=$this->smusicid;
        $umtable->useid=Yii::$app->user->identity->id;

        $trends=new Trends();
        $trends->lmusicid=1;
        $trends->musicid=$this->musictitle;
        $trends->useid=Yii::$app->user->identity->id;
        $trends->time=date('Y-m-d  h:i:sa');
        $trends->save();



        return $umtable->save() ? $umtable : null;
    }
      //喜爱删除
    public function romoveLmusic()
    {
        if($this->validate()){
            

            
        }
        
        return false;
    }
}