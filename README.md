# 简介
这是一个短网址生成网站，采用php编写

# 在apache上部署后请加入如下规则
```
<IfModule rewrite_module>
    RewriteEngine On
    #RewriteRule ^/(.*)$ /link.php?url=$1 [L]    
    RewriteRule ^/(((?!\.php).)*)$ /link.php?url=$1 [L] 
</IfModule>
```

或者在.htaccess中加入
```
RewriteRule ^/(((?!\.php).)*)$ /link.php?url=$1 [L]   
```

#如果使用nginx，规则这样写： 
```
rewrite ^/(.*)$ /link.php?url=$1 last; 
```