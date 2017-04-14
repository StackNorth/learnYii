<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/14
 * Time: 10:31
 */
namespace app\models;

use yii\base\Model;

class Status extends MOdel
{
    const PERMISSION_PRIVATE = 10;
    const PERMISSION_PUBLIC = 20;

    public $text;//文本
    public $permissions;

    /**
     * 自动触发yii自带的表单验证规则 required 不能为空
     */
    public function rules()
    {
        return [
            [
                ['text','permissions'],'required'
            ]
        ];
    }


    public function  getPermissions()
    {
        return array(self::PERMISSION_PRIVATE=>'Private',self::PERMISSION_PUBLIC=>'public');
    }

    public function getPermissionsLabel($permissions)
    {
        if($permissions == self::PERMISSION_PUBLIC){
            return 'Public';
        } else {
            return 'Private';
        }
    }


}