@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Add Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Task</label>
            <input type="text" name="tasks" class="form-control" id="tasks">
        </div>
        <div class="form-group">
            <label for="priority">priority</label>
            <select name="priority" id="priority">
                <option value="volvo">High</option>
                <option value="saab">Medium</option>
                <option value="mercedes">Low</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
