<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
//        return 'page home!';
        $tasks = Task::all();
        return view('tasks.index')->with('tasks',$tasks);
    }
}
