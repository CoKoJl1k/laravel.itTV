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
            @foreach($tasks as  $task)
                <tr>
                    <th>{{$task->id}}</th>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->created_at}}</td>
                    <td>{{$task->updated_at}}</td>
                    <!--<td><a href="<?=url()->current();?>/{{$task->id}}"> Delete</a></td>-->
                    <td>
                    {{ Form::open(['method' => 'DELETE', 'route' =>['tasks.destroy', $task->id]]) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
