# PHPUnit

目前最新版本需要PHP7.3以上
PHP extentsion: dom、json、 pcre、reflection、spl(這些通常預設為啟用)
code coverage report需要Xdebug 2.5以上以及tokenizer這個PHP extensions 
 
全域安裝(以6.5示範)

```sh
$ wget https://phar.phpunit.de/phpunit-6.5.phar
$ chmod +x phpunit-6.5.phar   //賦予權限
$ sudo mv phpunit-6.5.phar /usr/local/bin/phpunit
$ phpunit --version
PHPUnit 6.5.14 by Sebastian Bergmann and contributors.
```

