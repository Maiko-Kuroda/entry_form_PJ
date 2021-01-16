@extends('layouts.base')
@section('title', 'ng')
@section('content')

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>
<form action="{{action('Admin\UserController@judge')}}" method="get">
    <body>
    <div class="py-5">
        <div class="container">
       
        <div class="row">
            <div class="col-md-12">
            <div class="card" > <img class="card-img" src="https://static.pingendo.com/cover-bubble-light.svg" alt="Card image">
                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                <h2 class="text-primary">参加NG</h2>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
    <div>
        <h2 class="text">参加条件を満たしてません</h2>
    </div>
    <ul class="list-group list-group-flush">
              <li class="list-group-item" >Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
    
    </body>

    <div class="form-group row">
        <div class="col-md-12 offset-md-1">
            <input type="button" class="mt-3" onclick="location.href='./home'"
                value="戻る">
        </div>
    </div>

</form>
</html>

