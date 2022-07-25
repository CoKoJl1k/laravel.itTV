@extends('home')



@section('content')
    <div class="container">
        <h1>Add task</h1>
        <form method="POST" action="{{route('tasks.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea">title</label>
                <input name="title"  class="form-control" />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">description</label>
                <textarea name="description"  class="form-control" ></textarea>
            </div>

            <input type="hidden" name="user_id"   value="1" />

            <div class="form-group">
                <label for="exampleFormControlTextarea">board_id</label>
                <input name="board_id"  class="form-control"  value="{{request()->get('board_id')}}"  />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">column_id</label>
                <input name="column_id"  class="form-control" value="{{request()->get('column_id')}}"/>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">order</label>
                <textarea name="order"  class="form-control" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-1">Add task</button>
        </form>
        <div>
@endsection
