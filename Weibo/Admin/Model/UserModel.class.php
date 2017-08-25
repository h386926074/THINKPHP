<?php
/**
 * Created by PhpStorm.
 * User: huangfeng
 * Date: 18/08/2017
 * Time: 5:08 PM
 */

namespace Admin\Model;

use Think\Model;

class UserModel extends Model {
    public function __construct()
    {
        parent::__construct();
        echo 'Admin UserModel';
    }
}