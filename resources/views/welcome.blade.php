@extends('layouts.top')
@section('title', '新チャレンジマラソン')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div class="col-md-12">
            <div class="flex-center position-ref full-height py-0">
                <div class="content">
                    <div class="row"> 
                        <img class="d-block mx-auto" style="width: 97%;" src="image/ann.png" />  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>@endsection
