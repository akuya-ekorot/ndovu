<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function show(string $id): View
    {
        $user = User::findOrFail($id);
        $tasks = Task::where('user_id', $user->id)->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }
}
