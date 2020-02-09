
PHP Manual Analysis 一份PHP手册的分析
===============

* PHP7.4手册分析报告
* 作为一名phper，是否没有通读过php官方手册？
* 是否觉得手册初看上去内容不多，但总是也没有浏览完？
* 是否点击php手册栏目点到手软都点不完成
* 可能不知道php手册有1万5千多页,函数几千个...
* 本项目将帮助你分析php手册各级目录的内容多少，占比多少。以及将尝试统计函数总数量、类总数量等
* 希望为你的php学习带来一点帮助。

> 已同步发布此项目实战开发视频教程

# 核心基础统计分析结果： 
 
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
 - 94.7%的内容是类和函数介绍页面


##  函数和方法 以及类的第一次统计结果出炉

- 此统计根据 11240-6158= 5082

函数4千多，方法5千多 。合计占了手册了三分之二

## 目前最新版V2.5.2
* 完成了前端树形结果的展示
* 完整了每一个栏目占总数的百分比统计
* 增加了在线演示html统计结果
* 待完成每个栏目按照官方手册的顺序显示
* 待完成全部折叠和展开的功能对接
* 待完成栏目的快速搜索功能
* 计划用Thinkphp6模型关联会进一步增加开发效率

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
 
 
 ## 更换编辑器为phpstorm原因分析
 
 使用sublime很多年了，为什么今天尝试换成phpstorm呢？
 
 首先为什么用了sublime很多年？
 - 我电脑配置低，打开sublime速度快
 - 代码配色比较喜欢
 - sublime里面界面简单
 
 以上这三点对于基本的一些快速编程调试工作还是很高效的
 
 昨天还有人问phpstorm设置背景图的问题，
 以及qq群里最近一个月大量的phpstorm注册码失效
 我一直想我怎么就没有发现用phpstorm好用呢
 断断续续我用过phpstorm，只是偶尔用一下
 phpstorm的优点：
 - 最近因为用函数追踪，再次上手用了phpstorm
 - 代码追踪我也不经常用，我以前用过phpstorm追踪过
 - 自动代码对齐，这个功能之前是发现phpstorm默认实现了
 - 而sublime代码对齐需要安装第三方插件，而且大文件报错
 - 而且sublime代码对齐插件设置不灵活，比如use里没有用的会自动删除
 - 代码对齐工整，目前已经是必须做好了的一件事情了
 - 所以这是弃用sublime的第一大理由
 - 接着是代码配色，我超适应sublime代码配色
 - 或者说之前超级不适应phpstorm里的代码配色
 - 在一个不适应的代码显示配色里敲代码的思路都乱了的
 - 但是因为自动对齐的硬伤，我仔细对比了phpstorm里有没有一个比较接近的
 - 我手工一一对比后发现了一个比较相似的
 - 最后发现这个皮肤的名字是monokai，原来sublime默认就是用的这个
 - monokai也有一些细小的版本，但大的显示风格上是一直的
 - monokai是波兰的一个设计师做的 mono代码一个人 kai是觉得酷炫随便起的
 - 所以代码配色风格的问题也解决了。
 - 再说phpstorm界面感觉比sublime臃肿的问题
 - 第一应该是很多栏目是可以关闭的
 - 第二我发现有个git 提交commit功能
 - 本来我手工在git命令行提交的，这里自动也可以用
 - 这个还挺快捷，也有一些代码对比等小界面的功能
 - 所有今天我先用phpstorm格式化了一遍我之前sublime里的代码
 - 包括设置了变量=对齐和 数组=> 对齐，其它的没开
 - 最后 phpstorm收费的问题了。
 
 