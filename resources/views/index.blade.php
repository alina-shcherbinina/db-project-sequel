<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>

    <style>
        .myheight {
            min-height: inherit;
            max-height: inherit;
            height: 280px;
        }
    </style>

</head>
<body>
<div class="container">

    <h1> Database project </h1>
    <div class="container">
        <div class="row">
            <div class="card myheight" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Workers table</h5>
                    <h6 class="card-subtitle mb-2 text-muted">справочная табличка</h6>
                    <p class="card-text">Включает в себя базовую информацию о сотрудниках.</p>
                    <a class="btn btn-primary" href="/workers" role="button">workers</a>
                </div>
            </div>
            <div class="card myheight" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Positions table</h5>
                    <h6 class="card-subtitle mb-2 text-muted">справочная табличка</h6>
                    <p class="card-text">Включает в себя названия позиций, которые иогу занимать работники.</p>
                    <a class="btn btn-primary" href="/positions" role="button">positions</a>
                </div>
            </div>
            <div class="card myheight" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pivot table position/worker</h5>
                    <h6 class="card-subtitle mb-2 text-muted">табличка со связью many to many</h6>
                    <p class="card-text">Включает в себя названия позиций и работников, которые занимают эти
                        позиции.</p>
                    <a class="btn btn-primary" href="/pw" role="button">positions - worker</a>
                </div>
            </div>
        </div>


        <div class="row ">
            <div class="card myheight" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Categories table</h5>
                    <h6 class="card-subtitle mb-2 text-muted">справочная табличка</h6>
                    <p class="card-text">Включает в себя названия категорий</p>
                    <a class="btn btn-primary" href="/categories" role="button">categories </a>
                </div>
            </div>
            <div class="card myheight" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Comics table</h5>
                    <h6 class="card-subtitle mb-2 text-muted">справочная табличка / one to many</h6>
                    <p class="card-text">Включает в себя базовую информацию о комиксах и в какой категории они
                        находятся.</p>
                    <a class="btn btn-primary" href="/comics" role="button">comics </a>
                </div>
            </div>
        </div>
        <div class="row">
            <p> схема: </p>
            <img src="tables.png" class="img-fluid">
        </div>
    </div>
</div>

</body>
</html>
