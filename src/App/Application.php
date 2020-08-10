<?php

namespace App;

use App\Tasks\IndexTask;
use App\Tasks\TaskInterface;

class Application
{
    private $cfg;

    public function __construct(array $cfg)
    {
        $this->cfg = $cfg;
    }

    public function run()
    {
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        if (($pos = strpos($requestUri, '?')) !== false) {
            $requestUri = substr($requestUri, 0, $pos);
        }

        $task = $this->cfg['routes'][$requestUri] ?? $this->cfg['routes']['/'];
        if (!is_subclass_of($task, TaskInterface::class)) {
            $task = IndexTask::class;
        }

        (new $task($this))->execute();
    }
}
