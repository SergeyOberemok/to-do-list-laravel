<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrUpdateTask;
use App\Task;
use App\Transformers\TaskTransformer;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $done = $request->query('done', 'false') === 'true' ? true : false;

        $tasks = Task::where('done', $done)->get();

        return response()->json(fractal($tasks, new TaskTransformer())->toArray(), 200);
    }

    public function create(StoreOrUpdateTask $request)
    {
        $task = Task::create($request->all());

        return response()->json(fractal($task, new TaskTransformer()), 200);
    }

    public function update(StoreOrUpdateTask $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->fill($request->all());
        $task->save();

        return response()->json(fractal($task, new TaskTransformer()), 200);
    }

    public function destroy($id)
    {
        return response()->json(['data' => Task::destroy($id)], 200);
    }
}
