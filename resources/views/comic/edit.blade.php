
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


    <h1> Edit entry </h1>
    {!! Form::open(['action' => ['App\Http\Controllers\ComicsController@update', $comic->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $comic->name, ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
        <div class="form-group">
        {{Form::label('author', 'Author')}}
        {{Form::text('author', $comic->author, ['class' => 'form-control', 'placeholder' => 'author'])}}
    </div>
        <div class="form-group">
        {{Form::label('year', 'Year')}}
        {{Form::text('year', $comic->year, ['class' => 'form-control', 'placeholder' => 'year'])}}
    </div>
        <div class="form-group">
        {{Form::label('category_id', 'category_id')}}
        {{Form::text('category_id', $comic->category_id, ['class' => 'form-control', 'placeholder' => 'category_id'])}}
    </div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</body>
</html>
