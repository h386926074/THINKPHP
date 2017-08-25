<?php
return array(
	//'配置项'=>'配置值'

    'MODULE_DENY_LIST' => array('Common','Runtime'),
    'MODULE_ALLOW_LIST' => array('Home','Admin'),
    'DEFAULT_MODULE' => 'Admin',



    //mysql 全局定义
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_NAME'=>'thinkphp',
    'DB_USER'=>'root',
    'DB_PWD'=>'123456',
    'DB_PROT'=>'3306',
    'DB_PREFIX'=>'think_',
    'SHOW_PAGE_TRACE'=>true,

//    'DB_FIELDS_CACHE'=>false,

);