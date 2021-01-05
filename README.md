# PHPUnit

### 環境需求

- 目前最新版本需要PHP7.3以上
- PHP extentsion: dom、json、 pcre、reflection、spl(這些通常預設為啟用)
- code coverage report需要Xdebug 2.5以上以及tokenizer這個PHP extensions 
 
 ### 安裝
- 全域安裝(以9.5示範)

```sh
$ wget https://phar.phpunit.de/phpunit-9.5.phar //wget下載
$ chmod +x phpunit-9.5.phar   //賦予權限
$ sudo mv phpunit-9.5.phar /usr/local/bin/phpunit //更改檔名為phpunit
$ phpunit --version //查看版本並確認command是否能成功執行，即代表安裝成功
PHPUnit 9.5.0 by Sebastian Bergmann and contributors.
```

