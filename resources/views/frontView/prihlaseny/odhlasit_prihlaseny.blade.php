<html>
<head>
    <title>Simple Login System in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<img src="https://www.obcasnecas.ukf.sk/wp-content/2010/05/logo-ukf-1001x1024.jpg"; width="350px"; height="350px"; style="position:relative; margin-left: 40%; margin-top: 100px"; >
<div class="container box"; style="position: relative; margin-top: 50px">
    <h3 align="center">Naozaj sa chcete odhlásiť ?</h3><br />

    @if(isset(Auth::user()->email))

        <div class="alert alert-danger success-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Ste prihlásený pod {{ Auth::user()->email }}</strong>
            <br />
            <a href="{{ url('logout') }}">Odhlásiť</a>
        </div>
    @else
        <script>window.location = "/main";</script>
    @endif
    <br />
</div>
</body>
</html>