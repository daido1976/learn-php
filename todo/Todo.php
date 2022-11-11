<?php

declare (strict_types = 1);

class Todo
{

    /** @return array<int, array<string, string|int>> */
    public function all(): array
    {
        $jsonTodos = file_get_contents(__DIR__ . '/data.json');
        if ($jsonTodos === false) {
            $initValue = [];
            $result = file_put_contents(__DIR__ . '/data.json', json_encode($initValue));
            if ($result === false) {
                throw new \RuntimeException('Write file failed.');
            }
            return $initValue;
        }
        return json_decode($jsonTodos, true);
    }

    /** @param array<string, string> $params */
    /** @return array<string, string|int> */
    public function add(array $params): array
    {
        $todos = $this->all();
        $id = count($todos) !== 0 ? max(array_map(function ($x) {
            return $x['id'];
        }, $todos)) + 1 : 1;

        $newTodo = ["id" => $id, "title" => $params["title"], "body" => $params["body"]];
        $todos[] = $newTodo;

        $result = file_put_contents(__DIR__ . '/data.json', json_encode($todos, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        if ($result === false) {
            throw new \RuntimeException('Write file failed.');
        }

        return $newTodo;
    }
}
