<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<a class="btn btn-primary" href="/" role="button">back</a>


<body>


<div class="container">
    <a class="btn btn-primary" href="/workers/create" role="button"> create </a>
    <br>
    <br>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error')  }}
        </div>
    @endif
@if(count($workers) > 0)
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Phone</th>
            <th scope="col">created_at</th>
            <th scope="col">update_at</th>
        </tr>
        </thead>
        <tbody>
    @foreach($workers as $w)
        <tr>
            <th scope="row">{{$w->id}}</th>
            <td> <a href="/workers/{{$w->id}}"> {{$w->name}} </a></td>
            <td>{{$w->surname}}</td>
            <td>{{$w->phone}}</td>
            <td>{{$w->created_at}}</td>
            <td>{{$w->updated_at}}</td>
            <td>
            <a href="/workers/{{$w->id}}/edit" class="btn btn-default">
                Edit
            </a>
            {!! Form::open(['action' => ['App\Http\Controllers\WorkersController@destroy', $w->id],
            'method' => 'POST', 'class' => 'btn pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
        </tbody>
    </table>
</div>
@else
    <p> sorry, no entries to display </p>
@endif
</body>
    </html>
