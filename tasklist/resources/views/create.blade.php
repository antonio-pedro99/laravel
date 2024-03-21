@extends('layouts.app')

@section('title', 'Create Task')

@section('style')
<style>
    .error-msg {
        color: red;
        font-size: 0.7rem;
    }
</style>
@endsection

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="input-txt" value="{{old('title')}}">
            @error('title')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="input-txt">{{old('description')}}</textarea>
            @error('description')
                <div class="error-msg">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" class="input-txt">{{old('long_description')}}</textarea>
            @error('long_description')
                <div class="error-msg">{{ $message }}
            @enderror
        </div>
        <button type="submit" class="primary-btn">Create Task</button>
        <a href="{{ route('tasks.index') }}" class="secondary-btn">Cancel</a>
    </form>
@endsection
