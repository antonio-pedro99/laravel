@extends('layouts.app')

@section('title', 'Todo App')

@section('content')
        <h1>Todo App</h1>
        <span id="error-msg">This app has been created by Antonio Pedro</span>
        <div class="top-container">
            <a href="{{ route('tasks.create') }}" class="primary-btn">Create Task</a>
        </div>
        <ul class="todo-list">
           {{-- Loop through the tasks and display them --}}
            @forelse($tasks as $task)
                <li class="todo-item {{ $task->completed ? 'completed' : '' }}">
                    <input type="checkbox" {{ $task->completed ? 'checked' : '' }}>
                    <a href="{{ route('tasks.details', $task->id) }}">
                        <span>{{ $task->title }}</span>
                    </a>
                </li>
            @empty
                <h2>No tasks found</h2>
            @endforelse
        </ul>
@endsection
