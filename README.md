
PHP Manual Analysis 一份PHP手册的分析
===============

* 作为一名phper，你是否没有通读过php官方手册？
* 你是否觉得手册初看上去内容不多，但总是也没有浏览完？
* 你可能不知道php手册有1万5千多页,函数几千个...
* 本项目将帮助你分析php手册各级目录的内容多少，占比多少。以及将尝试统计函数总数量、类总数量等
* 希望为你的php学习带来一点帮助。

> 已同步发布此项目实战开发视频教程

# 主要统计分析结果：

有序版：

  

1.  [版权信息](copyright.php)
2.  [PHP 手册](manual.php)

    1.  [序言](preface.php)
3.  [入门指引](getting-started.php)

    1.  [简介](introduction.php)
    2.  [简明教程](tutorial.php)
4.  [安装与配置](install.php)

    1.  [安装前需要考虑的事项](install.general.php)
    2.  [Unix 系统下的安装](install.unix.php)
    3.  [Mac OS X 系统下的安装](install.macosx.php)
    4.  [Windows 系统下的安装](install.windows.php)
    5.  [云计算平台上的安装](install.cloud.php)
    6.  [FastCGI 进程管理器（FPM）](install.fpm.php)
    7.  [PECL 扩展库安装](install.pecl.php)
    8.  [还有问题？](install.problems.php)
    9.  [运行时配置](configuration.php)
5.  [语言参考](langref.php)

    1.  [基本语法](language.basic-syntax.php)
    2.  [类型](language.types.php)
    3.  [变量](language.variables.php)
    4.  [常量](language.constants.php)
    5.  [表达式](language.expressions.php)
    6.  [运算符](language.operators.php)
    7.  [流程控制](language.control-structures.php)
    8.  [函数](language.functions.php)
    9.  [类与对象](language.oop5.php)
    10.  [命名空间](language.namespaces.php)
    11.  [Errors](language.errors.php)
    12.  [异常处理](language.exceptions.php)
    13.  [生成器](language.generators.php)
    14.  [引用的解释](language.references.php)
    15.  [预定义变量](reserved.variables.php)
    16.  [预定义异常](reserved.exceptions.php)
    17.  [预定义接口](reserved.interfaces.php)
    18.  [上下文（Context）选项和参数](context.php)
    19.  [支持的协议和封装协议](wrappers.php)
6.  [安全](security.php)

    1.  [简介](security.intro.php)
    2.  [总则](security.general.php)
    3.  [以 CGI 模式安装时](security.cgi-bin.php)
    4.  [以 Apache 模块安装时](security.apache.php)
    5.  [会话（Session）安全](security.sessions.php)
    6.  [文件系统安全](security.filesystem.php)
    7.  [数据库安全](security.database.php)
    8.  [错误报告](security.errors.php)
    9.  [使用 Register Globals](security.globals.php)
    10.  [用户提交的数据](security.variables.php)
    11.  [魔术引号](security.magicquotes.php)
    12.  [隐藏 PHP](security.hiding.php)
    13.  [保持更新](security.current.php)
7.  [特点](features.php)

    1.  [用 PHP 进行 HTTP 认证](features.http-auth.php)
    2.  [Cookie](features.cookies.php)
    3.  [会话](features.sessions.php)
    4.  [处理 XForms](features.xforms.php)
    5.  [文件上传处理](features.file-upload.php)
    6.  [使用远程文件](features.remote-files.php)
    7.  [连接处理](features.connection-handling.php)
    8.  [数据库持久连接](features.persistent-connections.php)
    9.  [安全模式](features.safe-mode.php)
    10.  [PHP 的命令行模式](features.commandline.php)
    11.  [垃圾回收机制](features.gc.php)
    12.  [DTrace 动态跟踪](features.dtrace.php)
8.  [函数参考](funcref.php)

    1.  [影响 PHP 行为的扩展](refs.basic.php.php)
    2.  [音频格式操作](refs.utilspec.audio.php)
    3.  [身份认证服务](refs.remote.auth.php)
    4.  [针对命令行的扩展](refs.utilspec.cmdline.php)
    5.  [压缩与归档扩展](refs.compression.php)
    6.  [信用卡处理](refs.creditcard.php)
    7.  [加密扩展](refs.crypto.php)
    8.  [数据库扩展](refs.database.php)
    9.  [日期与时间相关扩展](refs.calendar.php)
    10.  [文件系统相关扩展](refs.fileprocess.file.php)
    11.  [国际化与字符编码支持](refs.international.php)
    12.  [图像生成和处理](refs.utilspec.image.php)
    13.  [邮件相关扩展](refs.remote.mail.php)
    14.  [数学扩展](refs.math.php)
    15.  [非文本内容的 MIME 输出](refs.utilspec.nontext.php)
    16.  [进程控制扩展](refs.fileprocess.process.php)
    17.  [其它基本扩展](refs.basic.other.php)
    18.  [其它服务](refs.remote.other.php)
    19.  [搜索引擎扩展](refs.search.php)
    20.  [针对服务器的扩展](refs.utilspec.server.php)
    21.  [Session 扩展](refs.basic.session.php)
    22.  [文本处理](refs.basic.text.php)
    23.  [变量与类型相关扩展](refs.basic.vartype.php)
    24.  [Web 服务](refs.webservice.php)
    25.  [Windows 专用扩展](refs.utilspec.windows.php)
    26.  [XML 操作](refs.xml.php)
    27.  [图形用户界面(GUI) 扩展](refs.ui.php)
9.  [PHP 核心：骇客指南](internals2.php)

        1.  [序言](internals2.preface.php)
    2.  [内存管理](internals2.memory.php)
    3.  [变量的使用](internals2.variables.php)
    4.  [函数的编写](internals2.funcs.php)
    5.  [类和对象的使用](internals2.objects.php)
    6.  [资源的使用](internals2.resources.php)
    7.  [INI 设置的使用](internals2.ini.php)
    8.  [流的使用](internals2.streams.php)
    9.  ["counter" 扩展 - 一个连续的实例](internals2.counter.php)
    10.  [PHP 5 构建系统](internals2.buildsys.php)
    11.  [扩展的结构](internals2.structure.php)
    12.  [PDO 驱动](internals2.pdo.php)
    13.  [扩展相关 FAQ](internals2.faq.php)
    14.  [Zend Engine 2 API 参考](internals2.apiref.php)
    15.  [Zend Engine 2 操作码列表](internals2.opcodes.php)
    16.  [Zend Engine 1](internals2.ze1.php)
10.  [FAQ](faq.php) — FAQ：常见问题

    1.  [一般信息](faq.general.php)
    2.  [邮件列表](faq.mailinglist.php)
    3.  [获取 PHP](faq.obtaining.php)
    4.  [数据库问题](faq.databases.php)
    5.  [安装](faq.installation.php) — 安装常见问题
    6.  [编译问题](faq.build.php)
    7.  [使用 PHP](faq.using.php)
    8.  [密码散列](faq.passwords.php) — 密码散列安全
    9.  [PHP 和 HTML](faq.html.php)
    10.  [PHP 和 COM](faq.com.php)
    11.  [其他问题](faq.misc.php)
11.  [附录](appendices.php)

    1.  [PHP 及其相关工程的历史](history.php)
    2.  [Migrating from PHP 7.3.x to PHP 7.4.x](migration74.php)
    3.  [从 PHP 7.2.x 移植到 PHP 7.3.x](migration73.php)
    4.  [从PHP 7.1.x 移植到 PHP 7.2.x](migration72.php)
    5.  [从PHP 7.0.x 移植到 PHP 7.1.x](migration71.php)
    6.  [从PHP 5.6.x 移植到 PHP 7.0.x](migration70.php)
    7.  [从PHP 5.5.x 移植到 PHP 5.6.x](migration56.php)
    8.  [从 PHP 5.4.x 迁移到 PHP 5.5.x](migration55.php)
    9.  [从 PHP 5.3.X 迁移到 PHP 5.4.X](migration54.php)
    10.  [从 PHP 5.2.x 移植到 PHP 5.3.x](migration53.php)
    11.  [Migrating from PHP 5.1.x to PHP 5.2.x](migration52.php)
    12.  [Migrating from PHP 5.0.x to PHP 5.1.x](migration51.php)
    13.  [从 PHP 4 移植到 PHP 5](migration5.php)
    14.  [PHP 的调试](debugger.php)
    15.  [配置选项](configure.php)
    16.  [php.ini 配置](ini.php)
    17.  [扩展库列表／归类](extensions.php)
    18.  [函数别名列表](aliases.php)
    19.  [保留字列表](reserved.php)
    20.  [资源类型列表](resource.php)
    21.  [可用过滤器列表](filters.php)
    22.  [所支持的套接字传输器（Socket Transports）列表](transports.php)
    23.  [PHP 类型比较表](types.comparisons.php)
    24.  [解析器代号列表](tokens.php)
    25.  [用户空间命名指南](userlandnaming.php)
    26.  [关于本手册](about.php)
    27.  [Creative Commons Attribution 3.0](cc.license.php)
    28.  [索引](indexes.php)
    29.  [更新日志](doc.changelog.php)

原版：
* [版权信息](https://www.php.net/manual/zh/copyright.php)
* [PHP 手册](https://www.php.net/manual/zh/manual.php)
    * [序言](https://www.php.net/manual/zh/preface.php)
* [入门指引](https://www.php.net/manual/zh/getting-started.php)
    * [简介](https://www.php.net/manual/zh/introduction.php)
    * [简明教程](https://www.php.net/manual/zh/tutorial.php)
* [安装与配置](https://www.php.net/manual/zh/install.php)
    * [安装前需要考虑的事项](https://www.php.net/manual/zh/install.general.php)
    * [Unix 系统下的安装](https://www.php.net/manual/zh/install.unix.php)
    * [Mac OS X 系统下的安装](https://www.php.net/manual/zh/install.macosx.php)
    * [Windows 系统下的安装](https://www.php.net/manual/zh/install.windows.php)
    * [云计算平台上的安装](https://www.php.net/manual/zh/install.cloud.php)
    * [FastCGI 进程管理器（FPM）](https://www.php.net/manual/zh/install.fpm.php)
    * [PECL 扩展库安装](https://www.php.net/manual/zh/install.pecl.php)
    * [还有问题？](https://www.php.net/manual/zh/install.problems.php)
    * [运行时配置](https://www.php.net/manual/zh/configuration.php)
* [语言参考](https://www.php.net/manual/zh/langref.php)
    * [基本语法](https://www.php.net/manual/zh/language.basic-syntax.php)
    * [类型](https://www.php.net/manual/zh/language.types.php)
    * [变量](https://www.php.net/manual/zh/language.variables.php)
    * [常量](https://www.php.net/manual/zh/language.constants.php)
    * [表达式](https://www.php.net/manual/zh/language.expressions.php)
    * [运算符](https://www.php.net/manual/zh/language.operators.php)
    * [流程控制](https://www.php.net/manual/zh/language.control-structures.php)
    * [函数](https://www.php.net/manual/zh/language.functions.php)
    * [类与对象](https://www.php.net/manual/zh/language.oop5.php)
    * [命名空间](https://www.php.net/manual/zh/language.namespaces.php)
    * [Errors](https://www.php.net/manual/zh/language.errors.php)
    * [异常处理](https://www.php.net/manual/zh/language.exceptions.php)
    * [生成器](https://www.php.net/manual/zh/language.generators.php)
    * [引用的解释](https://www.php.net/manual/zh/language.references.php)
    * [预定义变量](https://www.php.net/manual/zh/reserved.variables.php)
    * [预定义异常](https://www.php.net/manual/zh/reserved.exceptions.php)
    * [预定义接口](https://www.php.net/manual/zh/reserved.interfaces.php)
    * [上下文（Context）选项和参数](https://www.php.net/manual/zh/context.php)
    * [支持的协议和封装协议](https://www.php.net/manual/zh/wrappers.php)
* [安全](https://www.php.net/manual/zh/security.php)
    * [简介](https://www.php.net/manual/zh/security.intro.php)
    * [总则](https://www.php.net/manual/zh/security.general.php)
    * [以 CGI 模式安装时](https://www.php.net/manual/zh/security.cgi-bin.php)
    * [以 Apache 模块安装时](https://www.php.net/manual/zh/security.apache.php)
    * [会话（Session）安全](https://www.php.net/manual/zh/security.sessions.php)
    * [文件系统安全](https://www.php.net/manual/zh/security.filesystem.php)
    * [数据库安全](https://www.php.net/manual/zh/security.database.php)
    * [错误报告](https://www.php.net/manual/zh/security.errors.php)
    * [使用 Register Globals](https://www.php.net/manual/zh/security.globals.php)
    * [用户提交的数据](https://www.php.net/manual/zh/security.variables.php)
    * [魔术引号](https://www.php.net/manual/zh/security.magicquotes.php)
    * [隐藏 PHP](https://www.php.net/manual/zh/security.hiding.php)
    * [保持更新](https://www.php.net/manual/zh/security.current.php)
* [特点](https://www.php.net/manual/zh/features.php)
    * [用 PHP 进行 HTTP 认证](https://www.php.net/manual/zh/features.http-auth.php)
    * [Cookie](https://www.php.net/manual/zh/features.cookies.php)
    * [会话](https://www.php.net/manual/zh/features.sessions.php)
    * [处理 XForms](https://www.php.net/manual/zh/features.xforms.php)
    * [文件上传处理](https://www.php.net/manual/zh/features.file-upload.php)
    * [使用远程文件](https://www.php.net/manual/zh/features.remote-files.php)
    * [连接处理](https://www.php.net/manual/zh/features.connection-handling.php)
    * [数据库持久连接](https://www.php.net/manual/zh/features.persistent-connections.php)
    * [安全模式](https://www.php.net/manual/zh/features.safe-mode.php)
    * [PHP 的命令行模式](https://www.php.net/manual/zh/features.commandline.php)
    * [垃圾回收机制](https://www.php.net/manual/zh/features.gc.php)
    * [DTrace 动态跟踪](https://www.php.net/manual/zh/features.dtrace.php)
* [函数参考](https://www.php.net/manual/zh/funcref.php)
    * [影响 PHP 行为的扩展](https://www.php.net/manual/zh/refs.basic.php.php)
    * [音频格式操作](https://www.php.net/manual/zh/refs.utilspec.audio.php)
    * [身份认证服务](https://www.php.net/manual/zh/refs.remote.auth.php)
    * [针对命令行的扩展](https://www.php.net/manual/zh/refs.utilspec.cmdline.php)
    * [压缩与归档扩展](https://www.php.net/manual/zh/refs.compression.php)
    * [信用卡处理](https://www.php.net/manual/zh/refs.creditcard.php)
    * [加密扩展](https://www.php.net/manual/zh/refs.crypto.php)
    * [数据库扩展](https://www.php.net/manual/zh/refs.database.php)
    * [日期与时间相关扩展](https://www.php.net/manual/zh/refs.calendar.php)
    * [文件系统相关扩展](https://www.php.net/manual/zh/refs.fileprocess.file.php)
    * [国际化与字符编码支持](https://www.php.net/manual/zh/refs.international.php)
    * [图像生成和处理](https://www.php.net/manual/zh/refs.utilspec.image.php)
    * [邮件相关扩展](https://www.php.net/manual/zh/refs.remote.mail.php)
    * [数学扩展](https://www.php.net/manual/zh/refs.math.php)
    * [非文本内容的 MIME 输出](https://www.php.net/manual/zh/refs.utilspec.nontext.php)
    * [进程控制扩展](https://www.php.net/manual/zh/refs.fileprocess.process.php)
    * [其它基本扩展](https://www.php.net/manual/zh/refs.basic.other.php)
    * [其它服务](https://www.php.net/manual/zh/refs.remote.other.php)
    * [搜索引擎扩展](https://www.php.net/manual/zh/refs.search.php)
    * [针对服务器的扩展](https://www.php.net/manual/zh/refs.utilspec.server.php)
    * [Session 扩展](https://www.php.net/manual/zh/refs.basic.session.php)
    * [文本处理](https://www.php.net/manual/zh/refs.basic.text.php)
    * [变量与类型相关扩展](https://www.php.net/manual/zh/refs.basic.vartype.php)
    * [Web 服务](https://www.php.net/manual/zh/refs.webservice.php)
    * [Windows 专用扩展](https://www.php.net/manual/zh/refs.utilspec.windows.php)
    * [XML 操作](https://www.php.net/manual/zh/refs.xml.php)
    * [图形用户界面(GUI) 扩展](https://www.php.net/manual/zh/refs.ui.php)
* [PHP 核心：骇客指南](https://www.php.net/manual/zh/internals2.php)
    * [序言](https://www.php.net/manual/zh/internals2.preface.php)
    * [内存管理](https://www.php.net/manual/zh/internals2.memory.php)
    * [变量的使用](https://www.php.net/manual/zh/internals2.variables.php)
    * [函数的编写](https://www.php.net/manual/zh/internals2.funcs.php)
    * [类和对象的使用](https://www.php.net/manual/zh/internals2.objects.php)
    * [资源的使用](https://www.php.net/manual/zh/internals2.resources.php)
    * [INI 设置的使用](https://www.php.net/manual/zh/internals2.ini.php)
    * [流的使用](https://www.php.net/manual/zh/internals2.streams.php)
    * ["counter" 扩展 - 一个连续的实例](https://www.php.net/manual/zh/internals2.counter.php)
    * [PHP 5 构建系统](https://www.php.net/manual/zh/internals2.buildsys.php)
    * [扩展的结构](https://www.php.net/manual/zh/internals2.structure.php)
    * [PDO 驱动](https://www.php.net/manual/zh/internals2.pdo.php)
    * [扩展相关 FAQ](https://www.php.net/manual/zh/internals2.faq.php)
    * [Zend Engine 2 API 参考](https://www.php.net/manual/zh/internals2.apiref.php)
    * [Zend Engine 2 操作码列表](https://www.php.net/manual/zh/internals2.opcodes.php)
    * [Zend Engine 1](https://www.php.net/manual/zh/internals2.ze1.php)
* [FAQ](https://www.php.net/manual/zh/faq.php)— FAQ：常见问题
    * [一般信息](https://www.php.net/manual/zh/faq.general.php)
    * [邮件列表](https://www.php.net/manual/zh/faq.mailinglist.php)
    * [获取 PHP](https://www.php.net/manual/zh/faq.obtaining.php)
    * [数据库问题](https://www.php.net/manual/zh/faq.databases.php)
    * [安装](https://www.php.net/manual/zh/faq.installation.php)— 安装常见问题
    * [编译问题](https://www.php.net/manual/zh/faq.build.php)
    * [使用 PHP](https://www.php.net/manual/zh/faq.using.php)
    * [密码散列](https://www.php.net/manual/zh/faq.passwords.php)— 密码散列安全
    * [PHP 和 HTML](https://www.php.net/manual/zh/faq.html.php)
    * [PHP 和 COM](https://www.php.net/manual/zh/faq.com.php)
    * [其他问题](https://www.php.net/manual/zh/faq.misc.php)
* [附录](https://www.php.net/manual/zh/appendices.php)
    * [PHP 及其相关工程的历史](https://www.php.net/manual/zh/history.php)
    * [Migrating from PHP 7.3.x to PHP 7.4.x](https://www.php.net/manual/zh/migration74.php)
    * [从 PHP 7.2.x 移植到 PHP 7.3.x](https://www.php.net/manual/zh/migration73.php)
    * [从PHP 7.1.x 移植到 PHP 7.2.x](https://www.php.net/manual/zh/migration72.php)
    * [从PHP 7.0.x 移植到 PHP 7.1.x](https://www.php.net/manual/zh/migration71.php)
    * [从PHP 5.6.x 移植到 PHP 7.0.x](https://www.php.net/manual/zh/migration70.php)
    * [从PHP 5.5.x 移植到 PHP 5.6.x](https://www.php.net/manual/zh/migration56.php)
    * [从 PHP 5.4.x 迁移到 PHP 5.5.x](https://www.php.net/manual/zh/migration55.php)
    * [从 PHP 5.3.X 迁移到 PHP 5.4.X](https://www.php.net/manual/zh/migration54.php)
    * [从 PHP 5.2.x 移植到 PHP 5.3.x](https://www.php.net/manual/zh/migration53.php)
    * [Migrating from PHP 5.1.x to PHP 5.2.x](https://www.php.net/manual/zh/migration52.php)
    * [Migrating from PHP 5.0.x to PHP 5.1.x](https://www.php.net/manual/zh/migration51.php)
    * [从 PHP 4 移植到 PHP 5](https://www.php.net/manual/zh/migration5.php)
    * [PHP 的调试](https://www.php.net/manual/zh/debugger.php)
    * [配置选项](https://www.php.net/manual/zh/configure.php)
    * [php.ini 配置](https://www.php.net/manual/zh/ini.php)
    * [扩展库列表／归类](https://www.php.net/manual/zh/extensions.php)
    * [函数别名列表](https://www.php.net/manual/zh/aliases.php)
    * [保留字列表](https://www.php.net/manual/zh/reserved.php)
    * [资源类型列表](https://www.php.net/manual/zh/resource.php)
    * [可用过滤器列表](https://www.php.net/manual/zh/filters.php)
    * [所支持的套接字传输器（Socket Transports）列表](https://www.php.net/manual/zh/transports.php)
    * [PHP 类型比较表](https://www.php.net/manual/zh/types.comparisons.php)
    * [解析器代号列表](https://www.php.net/manual/zh/tokens.php)
    * [用户空间命名指南](https://www.php.net/manual/zh/userlandnaming.php)
    * [关于本手册](https://www.php.net/manual/zh/about.php)
    * [Creative Commons Attribution 3.0](https://www.php.net/manual/zh/cc.license.php)
    * [索引](https://www.php.net/manual/zh/indexes.php)
    * [更新日志](https://www.php.net/manual/zh/doc.changelog.php)


## 整理v2.0.0版本成果,V2.0版讲cli作为的主要运行平台

### v2.0开发计划
- 扩展数据表字段，更加详细的开展统计分析
- 增加字段 level 等级 记录目录级别
- 增加字段 sort 排序 记录其所在目录的排序
- 增加字段 title 标题 记录页面名称
- 采集官方目录结构，重点记录目录排序

* [ ] 代办事项1
* [ ] 代办事项2
    * [x] 完成事项3
    * [x] 完成事项4


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

~~~
源文件116M左右
~~~

 然后导入public/static/think_manual.sql数据库

## 功能需求和参与开发

添加我的QQ250285636 或 微信 18210787405 交流学习

## 版权信息

任意免费使用。
 