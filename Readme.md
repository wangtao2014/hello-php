# PHP Tutorials

## PHP 环境搭建
- PHP install 
  - brew install php@8.1
  - To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php_module /usr/local/opt/php@8.1/lib/httpd/modules/libphp.so

    <FilesMatch \.php$>
    SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
/usr/local/etc/php/8.1/

php@8.1 is keg-only, which means it was not symlinked into /usr/local,
because this is an alternate version of another formula.

If you need to have php@8.1 first in your PATH, run:
echo 'export PATH="/usr/local/opt/php@8.1/bin:$PATH"' >> ~/.zshrc
echo 'export PATH="/usr/local/opt/php@8.1/sbin:$PATH"' >> ~/.zshrc

For compilers to find php@8.1 you may need to set:
export LDFLAGS="-L/usr/local/opt/php@8.1/lib"
export CPPFLAGS="-I/usr/local/opt/php@8.1/include"


To restart php@8.1 after an upgrade:
brew services restart php@8.1
Or, if you don't want/need a background service you can just run:
/usr/local/opt/php@8.1/sbin/php-fpm --nodaemonize