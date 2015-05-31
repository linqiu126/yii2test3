<?php
/**
 * Created by PhpStorm.
 * User: liqiu
 * Date: 2015/5/30
 * Time: 12:18
 */

//QL，下面是从教程中COPY
namespace app\models;
use yii\base\Model;
class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
//QL，COPY到此为止

?>