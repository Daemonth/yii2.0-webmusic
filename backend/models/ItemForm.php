<?php
namespace backend\models;
/**
 * @author Xianan Huang
 *
 */
use Yii;
use yii\base\Model;
use common\models\AuthItem;
class ItemForm extends Model
{
    public $name ;
   
    public $type ;
   
    public $description ;
   
    const T_ROLE = 1;   //角色
    const T_POWER = 2;  //权限
   
    //定义场景
    const SCENARIOS_CREATE = 'create';
    const SCENARIOS_DELETE = 'delete';
    const SCENARIOS_UPDATE = 'update';
   
    public function rules()
    {
        return [
            [[ 'name', 'type'], 'required'],
            [ 'name', 'unique', 'targetClass' => '\common\models\AuthItem', 'message' => '此名称已经被占用。','on'=>self::SCENARIOS_CREATE],
            [ 'type', 'integer'],
            [[ 'name', 'description'], 'string', 'max'=>25]
        ];
    }
   
    public function attributeLabels()
    {
        return [
            'name' => '名称',
            'type' => '类型',
            'description' => '描述',
        ];
    }
   
    /**
     * 场景设置
     * @see \yii\base\Model::scenarios()
     */
    public function scenarios(){
        $scenarios = [
            self:: SCENARIOS_CREATE => ['name', 'type', 'description'],
            self:: SCENARIOS_DELETE => [ 'name'],
            self ::SCENARIOS_UPDATE => [ 'name', 'type', 'description'],
         ];
        return array_merge( parent:: scenarios(), $scenarios);
    }
     /**
     * 角色&权限的创建方法
     * @return boolean 返回成功或者失败的状态值
     */
    public function addItem()
    {
        //实例化AuthManager类
        $auth = Yii::$app->authManager;
        if($this->type == self::T_ROLE){
            $item = $auth->createRole($this->name);
            $item->description = $this->description?:'创建['.$this->name.']角色';
        }else{
            $item = $auth->createPermission($this->name);
            $item->description = $this->description?:'创建['.$this->name.']权限';
        }
        
       return $auth->add($item);
            
    }
    //角色权限删除
    public function romoveItem()
    {
        if($this->validate()){
            $auth = Yii::$app->authManager;
            $item = $auth->getRole($this->name)?:$auth->getPermission($this->name);
            return $auth->remove($item);
        }
        
        return false;
    }
      /**
     * 获取权限
     * @param unknown $id
     * @throws \Exception
     */
    public function getItem($id) {
        $model = AuthItem:: findOne(['name'=>$id]);
        if(!$model)
            throw new \Exception( '编辑的角色或权限不存在！' );
       
        $this-> name = $model-> name;
        $this-> type = $model-> type;
        $this-> description = $model-> description;
       
        return $this;
    }
     /**
     * 编辑权限
     * @param unknown $item_name
     * @return boolean
     */
    public function updateItem($item_name)
    {
        $auth = Yii:: $app-> authManager;
        if($this->type == self::T_ROLE){
            $item = $auth->createRole($this-> name);
            $item-> description = $this-> description?: '创建['.$this-> name. ']角色';
        }else{
            $item = $auth->createPermission($this-> name);
            $item-> description = $this-> description?: '创建['.$this-> name. ']权限';
        }
        return $auth->update($item_name, $item);
    }
}