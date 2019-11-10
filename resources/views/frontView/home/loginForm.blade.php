
<!DOCTYPE html>
<html>
<head>
    <title>Prihláste sa</title>
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

<img src="https://www.obcasnecas.ukf.sk/wp-content/2010/05/logo-ukf-1001x1024.jpg"; width="350px"; height="350px"; style="position:relative; margin-left: 40%; margin-top: 100px"; >
<div class="container box"; style="position: relative; margin-top: 50px">
    <h3 align="center">Prihláste sa</h3><br />

    @if(isset(Auth::user()->email))
        <script>window.location="successlogin";</script>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/checklogin') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Prihlasovacie meno</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Heslo</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Prihlásiť sa" style="position: relative; left: 40%"/>
        </div>
    </form>
</div>
</body>
</html>

