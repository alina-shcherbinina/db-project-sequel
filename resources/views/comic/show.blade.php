<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Show position</title>
</head>
<body>
<div class="container">
    <h1>position</h1>
    <h2> {{$comic -> name}} </h2>
    <h2> {{$comic -> author}} </h2>
    <h2> {{$comic -> year}} </h2>
    <a class="btn btn-primary" href="/comics" role="button"> back </a>
</div>
</body>
</html>
