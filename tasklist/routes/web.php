<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Task;

Route::get('/', function(){
   return redirect()->route('tasks.index');
});

Route::get('/tasks', function(){
    return view('index', [
        'tasks' => Task::latest()->get(),
    ]);
})->name('tasks.index');

Route::put('/tasks/{id}', function(Request $request, $id){
    $data = $request->validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_description'=> 'required',
    ]);

    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();
    return redirect()->route('tasks.details', ['id'=> $task->id])->with('success','Task updated successfully!');
})->name('tasks.update');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}/edit', function($id){
   $task = Task::findOrFail($id);

    return view('edit', [
         'task' => $task,
    ]);
   
})->name('tasks.edit');

Route::get('/tasks/{id}', function($id){
    $task = Task::findOrFail($id);

    return view('details', [
        'task' => $task,
    ]);
})->name('tasks.details');

Route::post('/tasks', function(Request $request){
    $data = $request->validate([
        'title'=> 'required|max:255',
        'description'=> 'required',
        'long_description'=> 'required',
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();
    return redirect()->route('tasks.details', ['id'=> $task->id])->with('success','Task created successfully!');
})->name('tasks.store');
