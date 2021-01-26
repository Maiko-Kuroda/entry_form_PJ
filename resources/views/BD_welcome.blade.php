<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet"> -->
        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #94B89C; */
                background-color: #81d8d0;
                color: #FFFFFF;
                font-family: "Nico Moji";
                font-weight: 250;
                height: 100vh;
                margin: 0;
            }
/* 
            .full-height {
                height: 145vh;
            } */

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

           

            .links > a {
                color: #FFFFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 0px;
                margin-top: 30px;
                /* height: 130vh; */
            }
        </style>
    </head>
    <body>
        <div class="col-md-8">
        
            <div class="flex-center position-ref full-height">

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">ログイン</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">参加申込み</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="row"> 
                        <img class="d-block mx-auto" style="width: 85%;" src="image/ann.png" />  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
