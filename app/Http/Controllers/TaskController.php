<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
      $tasks = Task::all();

      return view('tasks.index', compact('tasks'));
    }

  public function create()
  {
    $task = new Task;

    return view('tasks.create', compact('task'));
  }

  public function store(Request $request)
  {
    $task = new Task;
    $task->name = $request->input('name');
    $task->status = $request->input('status');
    $task->deadline = $request->input('deadline');
    $task->save();

    return redirect()->route('tasks.index');
  }

  public function edit(Task $task)
  {
    return view('tasks.edit', compact('task'));
  }

  public function update(Request $request, Task $task)
  {
    $task->name = $request->input('name');
    $task->status = $request->input('status');
    $task->deadline = $request->input('deadline');
    $task->save();

    return redirect()->route('tasks.index');
  }

  public function destroy(Task $task)
  {
    $task->delete();

    return redirect()->route('tasks.index');
  }
}
