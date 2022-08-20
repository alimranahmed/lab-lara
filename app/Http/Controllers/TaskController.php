<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function delete(Task $task): JsonResponse
    {
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully!']);
    }

    public function restore($taskId)
    {
        $deletedTask = Task::withTrashed()->find($taskId);
//        $deletedTask->restore();
        $deletedTask->restoreQuietly();
        return response()->json(['Task restored successfully!']);
    }
}
