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

    public function edit_view():View{
        return view("tasks_edit");
    }

        public function edit(Request $request):void{

    }
}
