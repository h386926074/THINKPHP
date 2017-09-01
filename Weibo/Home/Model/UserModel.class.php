<?php
/**
 * Created by PhpStorm.
 * User: huangfeng
 * Date: 18/08/2017
 * Time: 11:13 AM
 */

namespace Home\Model;

use Think\Model;

class UserModel extends Model {
//    protected $tablePrefix = 'tp_';
//    protected $tableName = 'abc';
//    protected $trueTableName='tp_abc';

//    protected $fields = array('id','user','_pk'=>'id');
//
//    public function __construct()
//    {
//        parent::__construct();
//        echo '\Home<br/>';
//    }

//    protected $_scope = array(
//        'sql1'=>array(
//          'where'=>array('id'=>1),
//        ),
//        'sql2'=>array(
//            'order'=>array('date'=>'DESC'),
//            'limit'=>2,
//        ),
//        'default'=>array(
//            'where'=>array('id'=>1),
//        ),
//
//    );
//
//    protected  $insertFields='user';
//    protected  $updateFields = 'user';


    //字段映射
//    protected $_map = array(
//        'youghu'=>'user',
//        'youxiang'=>'email',
//    );

    protected $_validate = array(
//        array('user','require','用户名不能为空',0,'regex',3),
//        array(),
//        array('user','email','邮箱格式不正确！'),// 9种验证
        //正则验证   /^$/ 正则的强制开头和结尾
        array('user','/^\d{3,6}$/','必须是3-6位纯数字',0,'regex'), //最后的0/1/3  多数是0和3 最后一个参数表示正则
//        array('user','3,6','不得小于3位，不得大于6位',0,'length'),   //最后一个可以是between notbetween
        //上边一行的 意思 验证user 字符串的长度在 3到6位之间 不得大于6位  第三个参数是错误信息  第6个参数可以是equal,notequal,confirm,,in,notin,in,ontin
//        array('user','name','两个值不想等',0,'confirm'),//判断传过来两个值是否想等 一般用来验证密码用
//        array('user','李炎恢','传递过来的值不想等',0,'equal'), //验证传过来的值
//        array('user',array(1,3,5),'不在指定范围内的某个值',0,'in'),   //可以反向验证 notin
//        array('user','张三,李四,王五','找不到指定的内置的值',0,'in'),



    );
}