# README

In virtual host configuration, or localhost configuration, or httpd.conf or apache2.conf

```php
<Directory /var/www/php_lessons>
    Options +FollowSymLinks +SymLinksIfOwnerMatch
    AllowOverride All
</Directory>
```

Inserire il file .htaccess nella root document di Apache