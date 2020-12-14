
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
<body>

<a class="btn btn-primary" href="/workers" role="button">back</a>
<div class="container">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class = "alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif


    <h1> Edit entry </h1>
    {!! Form::open(['action' => ['App\Http\Controllers\WorkersController@update', $worker->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $worker->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group">
        {{Form::label('surname', 'Surname')}}
        {{Form::text('surname', $worker->surname, ['class' => 'form-control', 'placeholder' => 'surname'])}}
    </div>
    <div class="form-group">
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', $worker->phone, ['class' => 'form-control', 'placeholder' => 'phone'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</body>
</html>
