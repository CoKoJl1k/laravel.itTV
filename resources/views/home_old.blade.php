@include('header')

@section('content')
    <div class="container">
        <div class="row">
        @foreach($boards as $board)
            <div class="col-lg-6 col-sm-12">
                <h1> {{ $board->title  }}</h1>
                <table>
                    <thead>

                    <tr>
                        @for( $i = 1; $i <= $board->columns; $i++ )

                            <th>Company</th>

                        @endfor
                    </tr>

                    </thead>



                    <tr>
                        <td>Alfreds Futterkiste</td>
                        <td>Maria Anders</td>
                        <td>Germany</td>
                    </tr>
                    <tr>
                        <td>Centro comercial Moctezuma</td>
                        <td>Francisco Chang</td>
                        <td>Mexico</td>
                    </tr>
                    <tr>
                        <td>Ernst Handel</td>
                        <td>Roland Mendel</td>
                        <td>Austria</td>
                    </tr>
                    <tr>
                        <td>Island Trading</td>
                        <td>Helen Bennett</td>
                        <td>UK</td>
                    </tr>

                </table>
            </div>
        @endforeach


        </div>

        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($boards as $board)
                <div class="col-lg-6 col-sm-12">
                    <h1> {{ $board->title  }}</h1>
                    <table>
                        <thead>

                        <tr>
                            @for( $i = 1; $i <= $board->columns; $i++ )

                                <th>Company</th>

                            @endfor
                        </tr>

                        </thead>



                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Maria Anders</td>
                            <td>Germany</td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>Francisco Chang</td>
                            <td>Mexico</td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td>Roland Mendel</td>
                            <td>Austria</td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>Helen Bennett</td>
                            <td>UK</td>
                        </tr>

                    </table>
                </div>
            @endforeach


        </div>

            <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>

        @foreach($boards as  $board)
            <tr>
                <th>{{$board->id}}</th>
                <td>{{$board->title}}</td>
                <td>{{$board->created_at}}</td>
                <td>{{$board->updated_at}}</td>

                <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['board.destroy', $value->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>

                {{-- <td>{{$value->comments->title}}</td>--}}

            </tr>
            @foreach($board->column as $column)
                <tr>
                    <th></th>
                    <td>{{$column->title}}</td>
                    <td>{{$comment->created_at}}</td>
                    <td>{{$comment->updated_at}}</td>
                <tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
        </div>

    </div>
@endsection

@section('content')
{{--
<div class="container">
<div class="row">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">board_id</th>
            <th scope="col">column_id</th>
            <th scope="col">task_id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>

        @foreach($boards as  $board)
            <tr>
                <td>{{$board->id}}</td>
                <td></td>
                <td></td>
                <td>{{$board->title}}</td>
                <td></td>
            <!--<td><a href="<?=url()->current();?>/{{$board->id}}"> Delete</a></td>-->
                <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['boards.destroy', $board->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>

            @foreach($board->columns as $column)
                <tr>
                    <td></td>
                    <td>{{$column->id}}</td>
                    <td></td>
                    <td>{{$column->title}}</td>
                    <td></td>
                    <td>
                        {{ Form::open(['method' => 'DELETE', 'route' =>['columns.destroy', $board->id]]) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                <tr>
                @foreach($board->tasks as $task)
                    <tr>
                        <td></td>
                        <td></td>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            {{ Form::open(['method' => 'DELETE', 'route' =>['tasks.destroy', $board->id]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </td>
                    <tr>
                @endforeach
            @endforeach
        @endforeach
        </tbody>
    </table>
</div>
</div>
--}}
@endsection

@yield('content')

@include('footer')
