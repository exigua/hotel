<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The best hotel of the world</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fauna+One&display=swap" rel="stylesheet">
                <style>
            html, body {
                background-image: url({{URL::asset('img/background.jpg')}});
                color: #636b6f;
                font-family: 'Fauna One', serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            
            }


            .full-height {
                height: 100vh;
            }

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

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    The best hotel of the world
                </div>

                <div class="links">
                    <a href="/rooms">Rooms</a>
                    <a href="/">About us</a>
                </div>
            </div>
        </div>
    </body>
</html>
