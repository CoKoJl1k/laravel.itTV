@extends('home')

@section('content')
    <div class="container">
        <h1>Add board</h1>
        <form method="POST" action="{{route('boards.store')}}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea">Title</label>
                <input name="title" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary my-1">Add board</button>
        </form>
        <div>
@endsection
