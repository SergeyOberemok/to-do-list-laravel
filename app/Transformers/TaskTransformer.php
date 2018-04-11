<?php

namespace App\Transformers;

use App\Task;
use League\Fractal\TransformerAbstract;

class TaskTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Task $task
     * @return array
     */
    public function transform(Task $task)
    {
        return [
            'id' => $task->id,
            'todo' => $task->todo,
            'deadline' => $task->deadline->toDateString(),
            'priority' => $task->priority,
            'done' => $task->done,
        ];
    }
}
