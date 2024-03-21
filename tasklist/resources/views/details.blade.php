@extends('layouts.app')

@section('title', 'Todo App -' . $task->title)

@section('content')
    <h1>Task Details</h1>
    <div>
        <h2>{{ $task->title }}</h2>
        <p>{{ $task->description }}</p>
        <p>Created at: {{ $task->created_at }}</p>
        <p>Updated at: {{ $task->updated_at }}</p>
    </div>
    <a href="{{ route('tasks.index') }}">Back to list</a>
    <a href="{{ route('tasks.edit', ['id'=> $task->id]) }}">Edit</a>
@endsection