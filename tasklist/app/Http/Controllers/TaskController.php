<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }
}
