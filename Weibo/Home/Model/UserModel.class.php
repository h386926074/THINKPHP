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

    protected $_scope = array(
        'sql1'=>array(
          'where'=>array('id'=>1),
        ),
        'sql2'=>array(
            'order'=>array('date'=>'DESC'),
            'limit'=>2,
        ),
        'default'=>array(
            'where'=>array('id'=>1),
        ),

    );

}