@extends('layout')
@section('content')

<div class="container mt-5">
<h1>Task List</h1>
<div class="card">
    <div class="card-header">
        {{ $task->title }}
    </div>
    <div class="card-body">
        <p class="card-text">{{ $task->title }}</p>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>
</div>
@endsection