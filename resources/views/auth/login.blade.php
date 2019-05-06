
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FRMNGR | Anmelden</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link href="{{ asset("adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="{{ asset("adminlte/bower_components/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="{{ asset("adminlte/bower_components/Ionicons/css/ionicons.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ asset("adminlte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>FIRE</b>MANAGER</a>
    </div>
    <div class="login-box-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input id="password" placeholder="Passwort" type="password" class="form-control" name="password" required autocomplete="current-password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Anmelden</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- jQuery 3 -->
<script src="{{ asset ("adminlte/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset ("adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
</body>
</html>