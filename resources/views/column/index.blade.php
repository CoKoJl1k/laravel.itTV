@extends('home')


@section('content')
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">posts</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
            </tr>
            </thead>
            <tbody>

            @foreach($columns as  $column)
                <tr>
                    <th>{{$column->id}}</th>
                    <td>{{$column->title}}</td>
                    <td>{{$column->board_id}}</td>
                    <td>{{$column->created_at}}</td>
                    <td>{{$column->updated_at}}</td>
                    <!--<td><a href="<?=url()->current();?>/{{$column->id}}"> Delete</a></td>-->
                    <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['boards.destroy', $column->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                    </td>

                   {{-- <td>{{$value->comments->title}}</td>--}}

                </tr>
                {{--
                    @foreach($column->board as $comment)
                    <tr>
                        <th></th>
                        <td>{{$comment->title}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>{{$comment->created_at}}</td>
                        <td>{{$comment->updated_at}}</td>
                    <tr>
                    @endforeach
                    --}}
            @endforeach
            </tbody>
        </table>
@endsection
