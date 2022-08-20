<?php

namespace App\Http\Controllers;


use App\Enums\TaskStatus;
use App\Models\Task;
use Illuminate\Support\Collection;

class TaskController extends Controller
{
    public function index(TaskStatus $status)
    {
        return $this->getByStatus($status);
    }

    protected function getByStatus(TaskStatus $status): Collection
    {
        return Task::select('name', 'status')
            ->where('status', $status)
            ->latest()
            ->take(10)
            ->get();
    }
}
