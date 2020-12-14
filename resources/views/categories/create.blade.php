 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Positions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<a class="btn btn-primary" href="/comics" role="button">back</a>

<div class="container">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class = "alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif

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
    <h1> Create entry </h1>
    {!! Form::open(['action' => 'App\Http\Controllers\CategoriesController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</body>
</html>
