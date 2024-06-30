<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index():View{
        // dd(Task::all()->toArray());
        $tasks = Task::all();
        return view("tasks",
            [
                'tasks' => $tasks
                ]);
    }

    public function create_view():View{
        return view("tasks_add");
    }

    public function create(Request $request):void{
        $data = $request->get("title");
        $data1 = $request->get("end-date");
        $task = new Task();
        $task->title = $data;
        $task->end_date = $data1;
        $task->save();
        // dd($data, $data1);
    }

    public function edit_view($id):View{
        $task = Task::find($id);
        return view("tasks_edit", compact('task'));
    }

    public function edit(Request $request, $id):void{
        $task = Task::find($id);
        $task->title = $request->input("title");
        $task->end_date = $request->input("end_date");
        $task->save();
    }

    public function delete($id):void{
        $task = Task::find($id);
        if ($task) {
        $task->delete();
        }
    }
}
