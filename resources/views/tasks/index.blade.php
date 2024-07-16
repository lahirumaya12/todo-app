@extends('layout')
@section('content')

<div class="container m-5">
    <div class="row">
        <div class="col">
            <h1>Task List</h1>
        </div>
        <div class="col">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>
        </div>
      </div>


@foreach ($tasks as $task)
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
                <p>Task</p>
                <p>{{$task->title}}</p>
            </div>
            <div class="col-sm-3">
                <p>Priority</p>
                <p>{{$task->priority}}</p>
            </div>
            <div class="col-sm-3">

            </div>
            <div class="col-sm-3">
                <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </div> 
        
        
    </div>
</div>
@endforeach


</div>
@endsection