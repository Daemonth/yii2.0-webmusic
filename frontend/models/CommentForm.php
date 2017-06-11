<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\Comment;

/**
 * Signup form
 */
class CommentForm extends Model
{
    public $comment;
    public $useimg;
    public $usename;
    public $musicid;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['comment', 'trim'],
            ['useimg', 'trim'],
            ['usename', 'trim'],
            ['musicid', 'trim'],
        ];
    }
     /**
     * @添加评论
     */

     public function addcomment()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $comment = new Comment();
        $comment->comment=$this->comment;
        $comment->musicid=$this->musicid;
        $comment->time=date('Y-m-d');
        $comment->useimg=Yii::$app->user->identity->useimg;
        $comment->usename=Yii::$app->user->identity->username;
        return $comment->save() ? $comment : null;
    }


    
}