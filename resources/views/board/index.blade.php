@extends('home')

@section('content')

<div class="container">
    <div class="row">
        <a class="btn btn-outline-primary" href="{{route('boards.create')}}">Add board</a>
        @foreach($boards as $board)
            <h2>
                <a class="btn btn-outline-column" href="{{route('boards.edit', $board->id) }}">
                    <i class="fa fa-edit" style="font-size:36px"></i>
                </a>
                {{$board->title}}
                {{ Form::open(['method' => 'DELETE', 'route' =>['boards.destroy', $board->id]]) }}
                {{ Form::submit('Delete board', ['class' => 'btn btn-danger btn-sm']) }}
                {{ Form::close() }}
            </h2>
            <a class="btn btn-outline-primary btn-sm" href="{{route('columns.create', ['board_id' => $board->id])}}">Add column</a>
            <table>
                <tr>
                @foreach($board->columns as $column)
                    <td>
                        <a class="btn btn-outline-column" href="{{route('columns.edit', $column->id) }}">
                            <i class="fa fa-edit" style="font-size:36px"></i>
                        </a>
                        <h4>{{$column->title}}</h4>
                        {{ Form::open(['method' => 'DELETE', 'route' =>['columns.destroy', $column->id]]) }}
                        {{ Form::submit('Delete column', ['class' => 'btn btn-danger btn-sm']) }}
                        {{ Form::close() }}
                        <a class="btn btn-outline-primary btn-sm" href="{{route('tasks.create',['board_id' => $board->id,'column_id' => $column->id])}}">Add task</a>
                        @foreach($board->tasks as $task)
                            @if($task->column_id === $column->id)
                                <hr>
                                <a class="btn btn-outline-column" href="{{route('tasks.edit', $task->id) }}">
                                    <i class="fa fa-edit" style="font-size:36px"></i>
                                </a>
                                <h5>{{$task->title}}</h5>
                                <p>{{$task->description}}</p>
                            @endif
                        @endforeach
                    </td>
                @endforeach
                <tr>
            </table>
        @endforeach
    </div>
</div>
@endsection
