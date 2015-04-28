<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/4/28
 * Time: 上午11:52
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

return [
    'database' => [
        'write' => [
            'database_type'     => 'mysql',
            'database_host'     => 'localhost',
            'database_port'     => 3306,
            'database_user'     => 'root',
            'database_pwd'      => '123456',
            'database_charset'  => 'utf8',
            'database_name'     => 'test',
            'database_prefix'   => ''
        ],
        'read' => [
            'database_type'     => 'mysql',
            'database_host'     => 'localhost',
            'database_port'     => 3306,
            'database_user'     => 'root',
            'database_pwd'      => '123456',
            'database_charset'  => 'utf8',
            'database_name'     => 'test',
            'database_prefix'   => ''
        ],
    ],
    'storage' => [

    ],
    'template' => [

    ],
    'errors' => [

    ],
    'logger' => [

    ],
];

/**
 * #数据库
database:
default_connection: read
write:
database_type: mysql
database_host: localhost
database_port: 3306
database_user: root
database_pwd: 123456
database_charset: utf8
database_name: sf_blog
database_prefix: sf_
read:
database_type: mysql
database_host: localhost
database_port: 3306
database_user: root
database_pwd: 123456
database_charset: utf8
database_name: sf_blog
database_prefix: sf_

#存储
storage:
redis:
host1:
host: 127.0.0.1
port: 6378
timeout: 5
memcache:
virtual:
host: 10.1.8.218
port: 11211
timeout: 5
ssdb:
host1:
host: 127.0.0.1
port: 138
timeout: 5

#模板引擎，暂时只支持twig模板引擎驱动
template:
engine: twig
paths:
- %root.path%/resources
- %root.path%/../src
options:
cache: %root.path%/cache/%env%

#自定义错误配置
errors:
page:
#        500: views/errors/500.html.twig

#纪录日志配置, 不建议修改路径
#日志名默认为dobee.log
logger:
path: %root.path%/logs/%date%
name: dobee.log



 */