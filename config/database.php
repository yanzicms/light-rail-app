<?php
/**
 * Project: lightRail.
 * Author: A.J <804644245@qq.com>
 * Copyright: A.J <804644245@qq.com> All rights reserved.
 * Licensed: Apache-2.0
 * GitHub: https://github.com/yanzicms/light-rail-app
 */
return [
    /**
     * 数据库类型：mysql
     */
    'type'            => 'mysql',
    /**
     * 服务器地址
     */
    'hostname'       => 'localhost',
    /**
     * 数据库名
     */
    'database'       => '',
    /**
     * 用户名
     */
    'username'       => '',
    /**
     * 密码
     */
    'password'       => '',
    /**
     * 端口
     */
    'hostport'       => '3306',
    /**
     * 数据库编码默认采用utf8
     */
    'charset'         => 'utf8',
    /**
     * 数据库表前缀
     */
    'prefix'         => 'lightrail_',
    /**
     * 是否使用主从分离方式
     */
    'deploy'          => 0,
    /**
     * 从服务器设置样例
     */
    'slave' => [
        'type' => 'mysql',
        'hostname' => '192.168.1.1,192.168.1.2',
        'database' => 'demo',
        'username' => 'root',
        'password' => '',
        'hostport' => '',
    ]
];