<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project)
    {
        $tasks = Task::all()->where('project_name',$project);
        return view('todo_list', compact('tasks','project'));
    }

    public function store(Request $request)
    {
        if ($request->filled('task')) {
            $task = $request->all();
    
           // return $task;
            Task::create($task);
        }
            $tasks = Task::all();
            return back();
    }

   
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($request->id);
        $task->status = 1;
        $task->update();
        return back();
    }

    
}
