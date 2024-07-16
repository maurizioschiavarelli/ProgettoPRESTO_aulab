<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <style>
        h1,
        h2 {
            text-align: center;
        }

        .email>div {
            margin-top: 10vh;
            width: 80%;
            margin: auto;
            box-shadow: 0px 51px 86px 0px rgba(0,0,0,0.75);
            -webkit-box-shadow: 0px 51px 86px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 51px 86px 0px rgba(0,0,0,0.75);
            border: 2px solid rgb(29, 156, 179);
            border-radius: 12px;
            text-align: center;
        }

        p{
            font-size: 20px;
            color: black
        }

        body {

            font-family: Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        .btn {
            background-color: #ffffff;
            border: solid 2px #0867ec;
            border-radius: 4px;
            box-sizing: border-box;
            color: #0867ec;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            padding: 12px 24px;
            text-decoration: none;
            text-transform: capitalize;
            margin-bottom: 12px;
        }

        .btn:hover {
            background-color: #0867ec;
            border: solid 2px #0867ec;
            border-radius: 8px;
            box-sizing: border-box;
            color: white;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: bold;
            margin: 0;
            padding: 12px 24px;
            text-decoration: none;
            text-transform: capitalize;
            margin-bottom: 12px;
        }

        span{
            font-weight: 700;
        }


    </style>
</head>

<body>
    <div class="email">
        <h1>Il seguente utente ha chiesto di lavorare con noi come revisore</h1>
        <h2>Ecco i suoi dati: </h2>
        <div>
            <p>Nome: <span>{{ $user->name }}</span></p>
            <p>Cognome: <span>{{ $user->surname }}</span></p>
            <p>Email: <span>{{ $user->email }}</span></p>
            <p>Clicca qui se vuoi renderl* revisore: </p>
            <a href="{{ route('make.revisor', compact('user')) }}"><button class="btn">Rendi revisore</button></a>
        </div>
    </div>
</body>

</html>
