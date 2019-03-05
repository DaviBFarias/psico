<<<<<<< HEAD
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                    Home - Hello World!
                </div>
            </div>
        </div>
    </body>
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <div class="interface">
        <header>
            <nav>
                <ul>
                    <li><a>IDIOMA</a>
                        <ul>
                            <li><a>ENGLISH</a></li>
                            <li><a>ESPAÑOL</a></li>
                        </ul>
                    </li>
                    <li><a>SAIR</a></li>
                </ul>
            </nav>
        </header>
        <header>
            <nav>
                <ul>
                    <li><a>CADASTRO</a></li>
                    <li><a>ANAMNESE</a></li>
                    <li><a>RELATORIOS</a></li>
                    <li><a>SAIR</a></li>    
                </ul>
            </nav>
        </header>
    </div>
</body>
>>>>>>> Inicio do Home
</html>
