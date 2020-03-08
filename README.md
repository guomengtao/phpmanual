
PHP Manual Analysis 一份PHP手册的分析
===============

- PHP7.4手册共计15037页
- 函数：4598个
- 类：584个包括了6643个方法
- 目录：796个
- 每个版本发布的新函数可以在附录栏目查看
 




### PHP7.4手册分析报告介绍
* 作为一名phper，是否没有通读过php官方手册？
* 是否觉得手册初看上去内容不多，但总是也没有浏览完？
* 是否点击php手册栏目点到手软都点不完成
* 可能不知道php手册有1万5千多页,函数几千个...
* 本项目将帮助你分析php手册各级目录的内容多少，占比多少。以及将尝试统计函数总数量、类总数量等
* 希望为你的php学习带来一点帮助。

> 已同步发布此项目实战开发视频教程

## 基础统计分析结果
 
[查看在线演示](http://rinuo.gitee.io/phpmanual/public/tree/index.html)

文件总数：15037

目录总数：1486 + 纯页面：13351

目录一共6层:
    一级目录：11
    二级目录：138
    三级目录：634
    四级目录：1632
    五级目录：9705
    六级目录：1907
    七级：1010


 
11+138+634+1632+9705+1907+1010 = 15037


一级目录：
 
1.  [版权信息](https://www.php.net/manual/zh/copyright.php) 0
2.  [PHP 手册](https://www.php.net/manual/zh/manual.php) s1c1
3.  [入门指引](https://www.php.net/manual/zh/getting-started.php) s16c210-1.4%
4.  [安装与配置](https://www.php.net/manual/zh/install.php) s9c47-0.31%
5.  [语言参考](https://www.php.net/manual/zh/langref.php) s19c208-1.38%
6.  [安全](https://www.php.net/manual/zh/security.php) s13c27-0.18%
7.  [特点](https://www.php.net/manual/zh/features.php) s12c27-0.18%
8.  [函数参考](https://www.php.net/manual/zh/funcref.php) s27c14293-95.05%
9.  [PHP 核心：骇客指南](https://www.php.net/manual/zh/internals2.php) s16c210-1.4%
10.  [FAQ](https://www.php.net/manual/zh/faq.php) s11c11-0.07% — FAQ：常见问题
11.  [附录](https://www.php.net/manual/zh/appendices.php) s29c192-1.28%


0+1+10+47+208+27+27+14293+210+11+192 = 15026 = 15037 -11

Note： s=子目录 c=包含文件 %=手册比例

## 通过分析页面含有.title样式发现
 - 本统计结果保存为 public/Analysis/basic/list.html
 - 有796个文件不包括.title
 - 随机抽查发现是目录页
 - 那么剩余的是15037-796=14241个
 
## 最新更新纪要
+ 实现了使用bootstrap-table显示php手册表
+ 实现了其中的跨页搜索，这个重点
+ 方法，通过下载bootstrap-table的demo挑选了一个进行的json对接
+ 同时测试了其中的导出 筛选等功能
+ 已经上线在访问目录 public/static/btm/#options/table-locale.html

 [搜索](http://rinuo.gitee.io/phpmanual/public/static/btm/#options/table-locale.html)
 
##  函数和方法 以及类的第一次统计结果出炉


函数和方法合计11241个
function 函数 4598个
 函数表：./public/tree/json/fn.html
method 方法  6643个 
  方法见：./public/tree/json/method.html
  
类有584个，每个类包含的方法数
 类名单见：public/analysis/basic/class.html


584个类里包含6643个方法，平均每个类包括11.3个方法

- 94.7%的内容是类和函数介绍页面
- 此统计根据 11241-4598= 6643
- 11241/15037 = 0.747
## 目前最新版V2.6
* 完成每个栏目按照官方手册的顺序显示
* 待完成全部折叠和展开的功能对接
* 待完成栏目的快速搜索功能对接
* 快速搜索json文件手册访问速度略慢
 
## 统计分析

* 采用`ThinkPHP 6.0`框架分析,运行环境要求PHP7.1+
* 采用`PHP.net`官方提供的7.4 html2020-01-16版本手册
* 采用`querylist`采集统计
* 采用`CLI`命令行作为主要分析平台
* 前端采用 `zTree`作为树形目录显示
* 统计手册共计15037页
* 通过QL获取了所有15037页面的上级目录
* 多次使用递归循环统计各级目录
* 统计出了基本的树形分类
* 统计发现一级栏目`Function Reference` 函数参考栏目14293页，占总手册95.05%


## 安装本统计源码

~~~
composer create-project guomengtao/phpmanual
~~~

统计结果浏览： public/tree/index.html

统计源码：
 导入public/static/think_manual.sql数据库
配置根目录.env的数据库账号密码，public/index.php

~~~
源文件116M+
~~~

  

## 功能需求和参与开发

添加 QQ250285636 或 微信 18210787405 交流学习

## 版权信息

MIT
 
  