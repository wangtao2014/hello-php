# PHP Tutorials

## PHP 环境搭建
- PHP install 
  - brew install php@8.1
    - Set PATH:
    - If you need to have php@8.1 first in your PATH, run:
      echo 'export PATH="/usr/local/opt/php@8.1/bin:$PATH"' >> ~/.zshrc
      echo 'export PATH="/usr/local/opt/php@8.1/sbin:$PATH"' >> ~/.zshrc
    - Set compilers:
    - export LDFLAGS="-L/usr/local/opt/php@8.1/lib"
      export CPPFLAGS="-I/usr/local/opt/php@8.1/include"
  - brew install nginx 
    - 配置 nginx 参见：nginx_install_succ.txt
  - index.php 部署位置：
    - /usr/local/var/www/index.php
    - http://localhost/index.php

- Ref: [Mac 下 PHP 环境搭建](https://www.cnblogs.com/duyuanshang/p/php_dev_m1.html)
- Ref: [XAMPP是最流行的PHP开发环境](https://www.apachefriends.org/zh_cn/index.html)
- Ref: [PHP 是什么？](https://www.php.net/manual/zh/intro-whatis.php)


## PHP Knowledge
- [Php namespace](https://www.runoob.com/php/php-namespace.html)
- a . b 并置 连接两个字符串,eg: 
  - ```Php $a = 'a'; $b = 'b'; echo $a . $b; // ab```
  - a .= b  a = a . b 连接两个字符串并赋值给a
- phar文件还原(解压缩)
  - https://www.php.net/manual/zh/intro.phar.php
  - https://www.php.net/manual/en/phar.using.intro.php
```Php
<?php 
$phar = new Phar('siam.phar');  
$phar->extractTo('BaiduBce');
```
  - [String 字符串](https://www.php.net/manual/zh/language.types.string.php)
  - [Php phar 介绍](https://www.php.net/manual/zh/book.phar.php)
  - [PostgreSQL 在 PHP 中方法介绍](https://www.php.net/manual/en/book.pgsql.php)
  - [pg_hba.conf文件](http://www.postgres.cn/docs/9.4/auth-pg-hba-conf.html)
  - [使用phar上线你的代码包](https://segmentfault.com/a/1190000002166235)
  - [将 PHP 应用快速打包为 PHAR](https://learnku.com/articles/22370)
  - [box](https://github.com/box-project/box)
  - [Download Composer](https://getcomposer.org/download/)
  - [composer.json basic usage](https://getcomposer.org/doc/01-basic-usage.md)
  - [Packagist The PHP Package Repository](https://packagist.org/)

## Tools Tutorials
- [Mac 下 brew 切换为国内源](https://cloud.tencent.com/developer/article/1614039)
- Nginx 安装：
  - 目录：/usr/local/opt/nginx/bin/nginx
  - 配置文件：/usr/local/etc/nginx/nginx.conf
  - 启动：/usr/local/opt/nginx/bin/nginx
  - 停止：/usr/local/opt/nginx/bin/nginx -s stop
  - 重启：/usr/local/opt/nginx/bin/nginx -s reload
- Php Deployers
  - PhpStorm IDE 无法 deploy
  - [Deploy PHP everywhere](https://deployer.org/) https://github.red/php-deployer/
  - [nginx php-fpm安装配置](https://wizardforcel.gitbooks.io/nginx-doc/content/Text/6.5_nginx_php_fpm.html)
  - [composer打包项目](https://www.jianshu.com/p/0702d5376fe7)
  - [composer的原理和使用（上）--phar的相关](https://www.jianshu.com/p/796eff32046c)
  - [Phar使用姿势全解析，完美实现php项目打包部署](http://www.veiking.cn/blog/1072-page.html)
  - [PostgreSQL tutorials](https://www.tutorialspoint.com/postgresql/postgresql_environment.htm)
  - [PostgreSQL tutorials cn](https://www.runoob.com/postgresql/postgresql-syntax.html)

## PHP sources
  - https://github.com/jobbole/awesome-python-cn
  - https://github.com/jobbole/awesome-php-cn
  - [All intalls on mac](https://www.javatpoint.com/how-to-install-apache-on-mac)
  - [How To Set Up Apache and PHP from Homebrew on macOS](https://www.git-tower.com/blog/apache-on-macos/)