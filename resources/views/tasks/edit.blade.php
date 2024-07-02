@extends('layout')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $task->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
@endsection
