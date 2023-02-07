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



## Tools Tutorials
- [Mac 下 brew 切换为国内源](https://cloud.tencent.com/developer/article/1614039)
- Nginx 安装：
  - 目录：/usr/local/opt/nginx/bin/nginx
  - 配置文件：/usr/local/etc/nginx/nginx.conf
  - 启动：/usr/local/opt/nginx/bin/nginx
  - 停止：/usr/local/opt/nginx/bin/nginx -s stop
  - 重启：/usr/local/opt/nginx/bin/nginx -s reload