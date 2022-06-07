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
     * 是否调试模式
     */
    'debug' => true,
    /**
     * 时区
     */
    'timezone' => 'Asia/Shanghai',
    /**
     * 语言zh-cn，en-us
     */
    'language' => 'zh-cn',
    /**
     * 语言字符串
     */
    'langstring' => 'lang',
    /**
     * 是否开启rewrite
     */
    'rewrite' => false,
    /**
     * 模板标签开始符
     */
    'tagstart' => '{',
    /**
     * 模板标签结束符
     */
    'tagsend' => '}',
    /**
     * 模板文件后缀
     */
    'templatesuffix' => 'html',
    /**
     * 缓存方式
     */
    'cache' => 'file',
    /**
     * 网站地址后缀
     */
    'suffix' => 'html',
    /**
     * 分页输出的格式
     */
    'pagination' => 'Bootstrap',
    /**
     * 分页输出的数据格式，object，array
     */
    'paginationdata' => 'object',
    /**
     * 分页当前页左右保留的页码数量
     */
    'numbers' => 2,
    /**
     * 分页上一页显示内容
     */
    'previous' => '&laquo;',
    /**
     * 分页下一页显示内容
     */
    'next' => '&raquo;',
    /**
     * 分页输出的HTML是否包含ul
     */
    'containsul' => true,
    /**
     * 分页输出只有一页是否显示分页
     */
    'showone' => false,
    /**
     * 验证码宽度
     */
    'imagewidth' => 160,
    /**
     * 验证码高度
     */
    'imageheight' => 40,
    /**
     * 字体大小
     */
    'fontsize' => 18,
    /**
     * 验证码数量
     */
    'quantity' => 5,
    /**
     * 干扰点数量
     */
    'interferencepoints' => 30,
    /**
     * 干扰线数量
     */
    'interferencelines' => 4,
    /**
     * 验证码是否只使用一次，true，false
     */
    'useonce' => true,
    /**
     * 默认全局过滤方法 用逗号分隔多个
     */
    'default_filter' => '',
    /**
     * 默认AJAX 数据返回格式,可选json xml ...
     */
    'default_ajax_return' => 'json',
    /**
     * 默认输出类型
     */
    'default_return_type'    => 'html',
];