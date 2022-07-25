@extends('home')


@section('content')
    <div class="container">
        <h1>Add column</h1>
        <form method="POST" action="{{route('columns.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="exampleFormControlTextarea">Title</label>
                <input name="title"  class="form-control"  />
            </div>
            <input type="hidden" name="board_id"  class="form-control" value="{{ request()->get('board_id')}}" />

            <button type="submit" class="btn btn-primary my-1">Add column</button>
        </form>
        <div>
@endsection
