
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

1. [版权信息](http://www.php.com/static/copyright.php)
2. [PHP 手册](http://www.php.com/static/manual.php)
    1. [序言](http://www.php.com/static/preface.php)
3. [入门指引](http://www.php.com/static/getting-started.php)
    1. [简介](http://www.php.com/static/introduction.php)
    2. [简明教程](http://www.php.com/static/tutorial.php)
4. [安装与配置](http://www.php.com/static/install.php)
    1. [安装前需要考虑的事项](http://www.php.com/static/install.general.php)
    2. [Unix 系统下的安装](http://www.php.com/static/install.unix.php)
    3. [Mac OS X 系统下的安装](http://www.php.com/static/install.macosx.php)
    4. [Windows 系统下的安装](http://www.php.com/static/install.windows.php)
    5. [云计算平台上的安装](http://www.php.com/static/install.cloud.php)
    6. [FastCGI 进程管理器（FPM）](http://www.php.com/static/install.fpm.php)
    7. [PECL 扩展库安装](http://www.php.com/static/install.pecl.php)
    8. [还有问题？](http://www.php.com/static/install.problems.php)
    9. [运行时配置](http://www.php.com/static/configuration.php)
5. [语言参考](http://www.php.com/static/langref.php)
    1. [基本语法](http://www.php.com/static/language.basic-syntax.php)
    2. [类型](http://www.php.com/static/language.types.php)
    3. [变量](http://www.php.com/static/language.variables.php)
    4. [常量](http://www.php.com/static/language.constants.php)
    5. [表达式](http://www.php.com/static/language.expressions.php)
    6. [运算符](http://www.php.com/static/language.operators.php)
    7. [流程控制](http://www.php.com/static/language.control-structures.php)
    8. [函数](http://www.php.com/static/language.functions.php)
    9. [类与对象](http://www.php.com/static/language.oop5.php)
    10. [命名空间](http://www.php.com/static/language.namespaces.php)
    11. [Errors](http://www.php.com/static/language.errors.php)
    12. [异常处理](http://www.php.com/static/language.exceptions.php)
    13. [生成器](http://www.php.com/static/language.generators.php)
    14. [引用的解释](http://www.php.com/static/language.references.php)
    15. [预定义变量](http://www.php.com/static/reserved.variables.php)
    16. [预定义异常](http://www.php.com/static/reserved.exceptions.php)
    17. [预定义接口](http://www.php.com/static/reserved.interfaces.php)
    18. [上下文（Context）选项和参数](http://www.php.com/static/context.php)
    19. [支持的协议和封装协议](http://www.php.com/static/wrappers.php)
6. [安全](http://www.php.com/static/security.php)
    1. [简介](http://www.php.com/static/security.intro.php)
    2. [总则](http://www.php.com/static/security.general.php)
    3. [以 CGI 模式安装时](http://www.php.com/static/security.cgi-bin.php)
    4. [以 Apache 模块安装时](http://www.php.com/static/security.apache.php)
    5. [会话（Session）安全](http://www.php.com/static/security.sessions.php)
    6. [文件系统安全](http://www.php.com/static/security.filesystem.php)
    7. [数据库安全](http://www.php.com/static/security.database.php)
    8. [错误报告](http://www.php.com/static/security.errors.php)
    9. [使用 Register Globals](http://www.php.com/static/security.globals.php)
    10. [用户提交的数据](http://www.php.com/static/security.variables.php)
    11. [魔术引号](http://www.php.com/static/security.magicquotes.php)
    12. [隐藏 PHP](http://www.php.com/static/security.hiding.php)
    13. [保持更新](http://www.php.com/static/security.current.php)
7. [特点](http://www.php.com/static/features.php)
    1. [用 PHP 进行 HTTP 认证](http://www.php.com/static/features.http-auth.php)
    2. [Cookie](http://www.php.com/static/features.cookies.php)
    3. [会话](http://www.php.com/static/features.sessions.php)
    4. [处理 XForms](http://www.php.com/static/features.xforms.php)
    5. [文件上传处理](http://www.php.com/static/features.file-upload.php)
    6. [使用远程文件](http://www.php.com/static/features.remote-files.php)
    7. [连接处理](http://www.php.com/static/features.connection-handling.php)
    8. [数据库持久连接](http://www.php.com/static/features.persistent-connections.php)
    9. [安全模式](http://www.php.com/static/features.safe-mode.php)
    10. [PHP 的命令行模式](http://www.php.com/static/features.commandline.php)
    11. [垃圾回收机制](http://www.php.com/static/features.gc.php)
    12. [DTrace 动态跟踪](http://www.php.com/static/features.dtrace.php)
8. [函数参考](http://www.php.com/static/funcref.php)
    1. [影响 PHP 行为的扩展](http://www.php.com/static/refs.basic.php.php)
    2. [音频格式操作](http://www.php.com/static/refs.utilspec.audio.php)
    3. [身份认证服务](http://www.php.com/static/refs.remote.auth.php)
    4. [针对命令行的扩展](http://www.php.com/static/refs.utilspec.cmdline.php)
    5. [压缩与归档扩展](http://www.php.com/static/refs.compression.php)
    6. [信用卡处理](http://www.php.com/static/refs.creditcard.php)
    7. [加密扩展](http://www.php.com/static/refs.crypto.php)
    8. [数据库扩展](http://www.php.com/static/refs.database.php)
    9. [日期与时间相关扩展](http://www.php.com/static/refs.calendar.php)
    10. [文件系统相关扩展](http://www.php.com/static/refs.fileprocess.file.php)
    11. [国际化与字符编码支持](http://www.php.com/static/refs.international.php)
    12. [图像生成和处理](http://www.php.com/static/refs.utilspec.image.php)
    13. [邮件相关扩展](http://www.php.com/static/refs.remote.mail.php)
    14. [数学扩展](http://www.php.com/static/refs.math.php)
    15. [非文本内容的 MIME 输出](http://www.php.com/static/refs.utilspec.nontext.php)
    16. [进程控制扩展](http://www.php.com/static/refs.fileprocess.process.php)
    17. [其它基本扩展](http://www.php.com/static/refs.basic.other.php)
    18. [其它服务](http://www.php.com/static/refs.remote.other.php)
    19. [搜索引擎扩展](http://www.php.com/static/refs.search.php)
    20. [针对服务器的扩展](http://www.php.com/static/refs.utilspec.server.php)
    21. [Session 扩展](http://www.php.com/static/refs.basic.session.php)
    22. [文本处理](http://www.php.com/static/refs.basic.text.php)
    23. [变量与类型相关扩展](http://www.php.com/static/refs.basic.vartype.php)
    24. [Web 服务](http://www.php.com/static/refs.webservice.php)
    25. [Windows 专用扩展](http://www.php.com/static/refs.utilspec.windows.php)
    26. [XML 操作](http://www.php.com/static/refs.xml.php)
    27. [图形用户界面(GUI) 扩展](http://www.php.com/static/refs.ui.php)
9. [PHP 核心：骇客指南](http://www.php.com/static/internals2.php)
    1. [序言](http://www.php.com/static/internals2.preface.php)
    2. [内存管理](http://www.php.com/static/internals2.memory.php)
    3. [变量的使用](http://www.php.com/static/internals2.variables.php)
    4. [函数的编写](http://www.php.com/static/internals2.funcs.php)
    5. [类和对象的使用](http://www.php.com/static/internals2.objects.php)
    6. [资源的使用](http://www.php.com/static/internals2.resources.php)
    7. [INI 设置的使用](http://www.php.com/static/internals2.ini.php)
    8. [流的使用](http://www.php.com/static/internals2.streams.php)
    9. ["counter" 扩展 - 一个连续的实例](http://www.php.com/static/internals2.counter.php)
    10. [PHP 5 构建系统](http://www.php.com/static/internals2.buildsys.php)
    11. [扩展的结构](http://www.php.com/static/internals2.structure.php)
    12. [PDO 驱动](http://www.php.com/static/internals2.pdo.php)
    13. [扩展相关 FAQ](http://www.php.com/static/internals2.faq.php)
    14. [Zend Engine 2 API 参考](http://www.php.com/static/internals2.apiref.php)
    15. [Zend Engine 2 操作码列表](http://www.php.com/static/internals2.opcodes.php)
    16. [Zend Engine 1](http://www.php.com/static/internals2.ze1.php)
10. [FAQ](http://www.php.com/static/faq.php)— FAQ：常见问题
11. [一般信息](http://www.php.com/static/faq.general.php)
12. [邮件列表](http://www.php.com/static/faq.mailinglist.php)
13. [获取 PHP](http://www.php.com/static/faq.obtaining.php)
14. [数据库问题](http://www.php.com/static/faq.databases.php)
15. [安装](http://www.php.com/static/faq.installation.php)— 安装常见问题
16. [编译问题](http://www.php.com/static/faq.build.php)
17. [使用 PHP](http://www.php.com/static/faq.using.php)
18. [密码散列](http://www.php.com/static/faq.passwords.php)— 密码散列安全
19. [PHP 和 HTML](http://www.php.com/static/faq.html.php)
20. [PHP 和 COM](http://www.php.com/static/faq.com.php)
21. [其他问题](http://www.php.com/static/faq.misc.php)
22. [附录](http://www.php.com/static/appendices.php)
23. [PHP 及其相关工程的历史](http://www.php.com/static/history.php)
24. [Migrating from PHP 7.3.x to PHP 7.4.x](http://www.php.com/static/migration74.php)
25. [从 PHP 7.2.x 移植到 PHP 7.3.x](http://www.php.com/static/migration73.php)
26. [从PHP 7.1.x 移植到 PHP 7.2.x](http://www.php.com/static/migration72.php)
27. [从PHP 7.0.x 移植到 PHP 7.1.x](http://www.php.com/static/migration71.php)
28. [从PHP 5.6.x 移植到 PHP 7.0.x](http://www.php.com/static/migration70.php)
29. [从PHP 5.5.x 移植到 PHP 5.6.x](http://www.php.com/static/migration56.php)
30. [从 PHP 5.4.x 迁移到 PHP 5.5.x](http://www.php.com/static/migration55.php)
31. [从 PHP 5.3.X 迁移到 PHP 5.4.X](http://www.php.com/static/migration54.php)
32. [从 PHP 5.2.x 移植到 PHP 5.3.x](http://www.php.com/static/migration53.php)
33. [Migrating from PHP 5.1.x to PHP 5.2.x](http://www.php.com/static/migration52.php)
34. [Migrating from PHP 5.0.x to PHP 5.1.x](http://www.php.com/static/migration51.php)
35. [从 PHP 4 移植到 PHP 5](http://www.php.com/static/migration5.php)
36. [PHP 的调试](http://www.php.com/static/debugger.php)
37. [配置选项](http://www.php.com/static/configure.php)
38. [php.ini 配置](http://www.php.com/static/ini.php)
39. [扩展库列表／归类](http://www.php.com/static/extensions.php)
40. [函数别名列表](http://www.php.com/static/aliases.php)
41. [保留字列表](http://www.php.com/static/reserved.php)
42. [资源类型列表](http://www.php.com/static/resource.php)
43. [可用过滤器列表](http://www.php.com/static/filters.php)
44. [所支持的套接字传输器（Socket Transports）列表](http://www.php.com/static/transports.php)
45. [PHP 类型比较表](http://www.php.com/static/types.comparisons.php)
46. [解析器代号列表](http://www.php.com/static/tokens.php)
47. [用户空间命名指南](http://www.php.com/static/userlandnaming.php)
48. [关于本手册](http://www.php.com/static/about.php)
49. [Creative Commons Attribution 3.0](http://www.php.com/static/cc.license.php)
50. [索引](http://www.php.com/static/indexes.php)
51. [更新日志](http://www.php.com/static/doc.changelog.php)

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
 