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

## PHP Knowledge
- 