
PHP Manual Analysis 一份PHP手册的分析
===============

* 作为一名phper，你是否没有通读过php官方手册？
* 你是否觉得手册初看上去内容不多，但总是也没有浏览完？
* 你可能不知道php手册有1万5千多页,函数几千个...
* 本项目将帮助你分析php手册各级目录的内容多少，占比多少。以及将尝试统计函数总数量、类总数量等
* 希望为你的php学习带来一点帮助。

> 已同步发布此项目实战开发视频教程

## 统计分析

* 采用`ThinkPHP 6.0`框架分析,运行环境要求PHP7.1+
* 采用`PHP.net`官方提供的7.4 html2020-01-16版本手册
* 采用`querylist`采集统计
* 统计手册共计15037页
* 通过ql获取了所有15037页面的上级目录
* 统计出了基本的树形分类
* 统计发现一级栏目`Function Reference` 函数参考页面1万+以上，占总数2/3以上


## 安装本统计源码

~~~
composer create-project guomengtao/phpmanual
~~~

然后导入public/static/think_manual.sql数据库
配置根目录.env的数据库账号密码，开始浏览

如果需要更新本php统计源码
~~~
composer update guomengtao/phpmanual
~~~

 然后导入public/static/think_manual.sql数据库

## 功能需求和参与开发

添加我的QQ25028636 或 微信 18210787405 交流学习

## 版权信息

任意免费使用。
 