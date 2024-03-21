@extends('layouts.app')

@section('title', 'Edit Task')

@section('style')
<style>
    .error-msg {
        color: red;
        font-size: 0.7rem;
    }
</style>
@endsection

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', [$task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="input-txt" value="{{$task->title}}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="input-txt">
                {{ $task->description }}
            </textarea>
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" class="input-txt">
                {{ $task->long_description }}
            </textarea>
            @error('long_description')
                <div class="error-msg">{{ $message }}
            @enderror
        </div>
        <button type="submit" class="primary-btn">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="secondary-btn">Cancel</a>
    </form>
@endsection