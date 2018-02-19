<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Административная панель</title>
    <meta name="description" content="Support: klim0v-sergey@yandex.ru">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="particles/css/style.css">
    <link rel="stylesheet" media="screen" href="static/css/bootstrap.min.css">
    <style>
        .panel {
            /*font-family: 'Source Sans Pro';*/
            /*font-size: 1.3em;*/
            position: absolute;
            /*z-index: 10;*/
            width: 400px;
            height: 320px;
            background: #eee;
            top: 50%;
            left: 50%;
            margin: -135px 0 0 -150px;
            padding: 20px;
            border-radius: 4px;
            box-sizing: border-box;
            z-index: 100;
        }
    </style>
</head>
<body>

<!--<div class="col-md-4 col-md-offset-4">-->
<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Пожалуйста авторизуйтесь</h3>
    </div>
    <div class="panel-body">
        {{--<form role="form" method="POST" action="{{ route('login') }}>--}}
            {{--<fieldset>--}}
                {{--<div class="form-group">--}}
                    {{--<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input class="form-control" placeholder="Пароль" name="password" type="password" value="">--}}
                {{--</div>--}}
                {{--<div class="checkbox">--}}
                    {{--<label>--}}
                        {{--<input name="remember" type="checkbox" value="Запомнить меня">Запомнить меня--}}
                    {{--</label>--}}
                {{--</div>--}}
                {{--<!-- Change this to a button or input when using this as a form -->--}}
                {{--<a href="index.html" class="btn btn-lg btn-success btn-block">Вход</a>--}}
            {{--</fieldset>--}}
        {{--</form>--}}
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-md-3 control-label">E-Mail</label>

                <div class="col-md-8">
                    <input type="email" class="form-control" name="email" value="admin@site.com">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-3 control-label">Пароль</label>

                <div class="col-md-8">
                    <input type="password" class="form-control" name="password" value="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Запомнить меня
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>Вход
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--</div>-->

<div id="particles-js"></div>
<!-- scripts -->
<script src="particles/particles.js"></script>
<script src="particles/js/app.js"></script>
</body>
</html>
