@extends('home')




@section('content')
    <div class="container">
        <h1>Edit column</h1>
        <form method="POST" action="{{ route('columns.update', $column[0]->id )}}" >
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea">Title</label>
                <input name="title"  class="form-control"  value="{{$column[0]->title}}"  />
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea">Board ID</label>
                <input name="board_id"  class="form-control" value="{{$column[0]->board_id}}" />
            </div>

            <button type="submit" class="btn btn-primary my-1">Save</button>
        </form>
        <div>
@endsection
