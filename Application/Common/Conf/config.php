<?php
return array(
	//'配置项'=>'配置值'
      //数据库配置信息
      'DB_TYPE' => 'mysql',//数据库类型
      'DB_HOST' => 'localhost',//服务器地址
      'DB_NAME' => 'sailian_contacts',//链接数据库名字
      'DB_USER' => 'root',//用户名
      'DB_PWD' => 'root',//密码
      'DB_PORT' => 3306, //端口
      'DB_PREFIX' => 'sc_', //数据库表前缀


      //默认模块
      'DEFAULT_MODULE' => 'Home',

      //允许访问的模块
      'MODULE_ALLOW_LIST' => array('Home','Admin'),
);