<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Positions Workers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<a class="btn btn-primary" href="/" role="button">back</a>
<div class="container">
    <a class="btn btn-primary" href="/pw/create" role="button">create</a>
    <br>
    <br>
    @if(count($positions) > 0)
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">position</th>
                <th scope="col">worker(s)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($positions as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td><ul>
                            @foreach($p->workers as $worker)
                                <li> {{ $worker->name }} {{ $worker->surname }}</li>
                            @endforeach
                        </ul>
                        <a href="/pw/{{$p->id}}/edit" class="btn btn-default">
                            Edit
                        </a>
{{--                        {!! Form::open(['action' => ['App\Http\Controllers\PivotController@destroy', $p->id],--}}
{{--                        'method' => 'POST', 'class' => 'btn pull-right']) !!}--}}
{{--                        {{Form::hidden('_method', 'DELETE')}}--}}
{{--                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}--}}
{{--                        {!! Form::close() !!}--}}
                    </td>
            @endforeach
            </tbody>
        </table>
</div>
@else
    <p> sorry, no entries to display </p>
@endif
</body>
</html>
