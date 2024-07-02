<!DOCTYPE html>
<html>
<head>
    <title>{{ $task->title }}</title>
</head>
<body>
<h1>{{ $task->title }}</h1>
<p>{{ $task->description }}</p>
<p>{{ $task->completed ? 'Completed' : 'Not Completed' }}</p>
<a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
<form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
</body>
</html>
@extends('layout')
