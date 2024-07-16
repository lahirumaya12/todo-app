@extends('layout')
@section('content')

<div class="container mt-5">
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $task->title }}">
        </div>
        <div class="form-group">
            <label for="priority">priority</label>
            <textarea name="priority" class="form-control" id="priority">{{ $task->priority }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
