@extends('home')

@section('content')
    <div class="container">
        <h1>Edit board</h1>
        <form method="POST" action="{{ route('boards.update', $board[0]->id )}}" >
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea">Title</label>
                <input name="title" class="form-control"  value="{{$board[0]->title}}"/>
            </div>
            <button type="submit" class="btn btn-primary my-1">Save</button>
        </form>
        <div>
@endsection
