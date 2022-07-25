@extends('home')



@section('content')
    <div class="container">
        <h1>Edit task</h1>
        <form method="POST"  action="{{ route('tasks.update', $task[0]->id )}}" >
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea">title</label>
                <input name="title"  class="form-control"  value="{{$task[0]->title}}" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">description</label>
                <textarea name="description"  class="form-control" value="{{$task[0]->description}}">{{$task[0]->description}}</textarea>
            </div>

            <input type="hidden" name="user_id"   value="1" />

            <div class="form-group">
                <label for="exampleFormControlTextarea">board_id</label>
                <input name="board_id"  class="form-control" value="{{$task[0]->board_id}}"   />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">column_id</label>
                <input name="column_id"  class="form-control" value="{{$task[0]->column_id}}" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">order</label>
                <textarea name="order"  class="form-control" value="{{$task[0]->order}}" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-1">Save</button>
        </form>
        <div>
@endsection
