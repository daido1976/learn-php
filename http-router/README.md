# http-router

This HTTP router library is built for learning PHP.

See. [PHP でルーターを書いてみる](https://zenn.dev/iamwanabi/articles/52326ab451373b)

## Usage

See. [index.php](index.php).

```sh
# start server
$ php -S localhost:8000 -t http-router

# request
$ curl -X GET http://localhost:8000/params/123\?a\=b
$ curl -X POST http://localhost:8000/params/123\?a\=b -d '{"c":"d"}'
$ curl -X PATCH http://localhost:8000/params/123\?a\=b -d '{"c":"d"}'
$ curl -X DELETE http://localhost:8000/params/123\?a\=b -d '{"c":"d"}'
```
