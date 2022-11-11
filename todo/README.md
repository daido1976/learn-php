# todo

A todo web server.

```sh
$ php -S localhost:8000 -t todo
```

```sh
$ curl -X GET http://localhost:8000/todos | jq .
$ curl -X POST http://localhost:8000/todos -d '{ "title": "Test", "body": "bodyだよ" }' | jq .
# TODO: 以下は未実装
$ curl -X PUT http://localhost:8000/todos/1 -d '{ "title": "Test2", "body": "updateしたよ" }' | jq .
$ curl -X DELETE http://localhost:8000/todos/1 | jq .
```
