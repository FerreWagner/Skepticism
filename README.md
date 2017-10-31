Skepticism 1.0
===============
Skepticism是一个由Ferre模仿的轮子框架，支持自动加载和单一入口，PATHINFO的路由模式。开始的设计想法是单例设计模式，在[version_1](https://github.com/FerreWagner/Skepticism_All/tree/master/version_1)版本中有采用。

Skepticism是一个通过PHP编写的简易MVC框架，基于PHP5.3编写，属于原生轮子，名为怀疑论，意为怀疑经验及过去。

主要功能及特性：

 + 基于PHP5.3+命名空间
 + GET方式的参数路由
 + 支持composer[自动加载](https://packagist.org/packages/ferrewagner/skepticism)项目(使用方式：composer require ferrewagner/skepticism)
 + 基于[Medoo](https://github.com/catfan/Medoo)的PDO扩展
 + 基于[whoops](https://github.com/filp/whoops)的错误提示
 + 基于[symfony/var-dumper](https://github.com/symfony/var-dumper)的渲染输出
 + 支持file形式的Log
 + 支持phpmailer和phpoffice
 + 支持强大灵活的类库

> Skepticism的运行环境要求PHP5.3以上。
> 
> 使用方式：composer require ferrewagner/skepticism

## 目录结构

如下：

~~~
www  WEB部署目录（或者子目录）
├─app           		MVC应用目录
│
├─core                  应用配置目录

_config					文件配置目录
|
_common					核心函数库目录
|
_lib
│  ├─log                日志配置目录
│  ├─conf.php         	加载配置文件
│  ├─log.php  		    日志配置文件
│  ├─model.php          模型配置文件
│  ├─route.php          路由解析文件
_smvc.php				自动加载文件
_log					日志存储目录
_vendor					扩展存储目录
_index.php				单一入口
~~~

## 命名规范
### 控制器类的命名方式
*   请尽量采用首字母小写的驼峰发表示，如：userCtrl.php,类名需与文件名一致；模型类同理。
*   函数的命名请遵循PSR规范；

### 常量和配置
*   常量以大写字母+下划线的方式命名，如 `define('SMVC', realpath('./'))`；
<br /><br />

## 版权信息

Skepticism完全开源，并遵循MIT协议，您可以免费使用或商用。

## TIPS:


- 使用前请先修改core/config/database.php的测试配置信息


- 本项目使用Zend Studio编写，如果您不希望出现相关配置信息，请删除.settings目录和.buildpath、.project文件


## 开发人员
Ferre(FerreWagner)