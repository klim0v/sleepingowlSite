<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Административная панель</title>
    <meta name="description" content="Support: klim0v-sergey@yandex.ru">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" media="screen" href="packages/sleepingowl/default/css/admin-app.css">
    <link rel="stylesheet" media="screen" href="particles/css/style.css">
    <link rel="stylesheet" media="screen" href="static/css/bootstrap.min.css">
    <style>
        .panel {
            /*font-family: 'Source Sans Pro';*/
            /*font-size: 1.3em;*/
            position: absolute;
            /*z-index: 10;*/
            width: 400px;
            height: 300px;
            background: #eee;
            top: 50%;
            left: 50%;
            margin: -135px 0 0 -150px;
            padding: 20px;
            border-radius: 4px;
            box-sizing: border-box;
            z-index: 100;
        }

        body {
            background-color: #000000;
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
        <form class="form-horizontal" role="form" method="POST" onsubmit="sendForm(this);" action="{{ route('login') }}">
            {!! csrf_field() !!}

            <div class="input-group margin-bottom-sm">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <input class="form-control" type="email" name="email" placeholder="Email" autofocus="">
            </div>
            <span class="help-block" id="email">
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
            </span>

            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                <input class="form-control" name="password" type="password" placeholder="Пароль">
            </div>
            <span class="help-block" id="password">
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
            </span>

            <div class="input-group">
                <span class="input-group-addon">
                    <input id="remember" type="checkbox" name="remember" style="width: 1.28571429em;">
                </span>
                <label for="remember" class="form-control">Запомнить меня</label>
            </div>
            <span class="help-block" id="remember">
                @if ($errors->has('remember'))
                    <strong>{{ $errors->first('remember') }}</strong>
                @endif
            </span>

            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-sign-in"></i> Авторизоваться
            </button>
        </form>
    </div>
</div>
<!--</div>-->

<div id="particles-js"></div>
<!-- scripts -->
<script src="particles/particles.js"></script>
<script src="particles/js/app.js"></script>

<script src="/static/js/jquery-1.11.3.min.js"></script>
<script>
    function sendForm(elem) {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: $(elem).attr('action'),
            type: "POST",
            data: $(elem).serialize(),
            success: function () {
                return window.location = "{{ route('admin.dashboard') }}";
            },
            error: function (data) {
                var errors = $.parseJSON(data.responseText);

                $(elem).find('.help-block > strong').remove();
                $.each(errors['errors'], function (index, value) {
                    console.log(index + ' => ' + value);
                    $(elem).find('#' + index).append('<strong>' + value + '</strong>');
                });

                return false;
            },
            complete: function () {
                try {
                }
                finally {
                }
            }
        });
    }
</script>
</body>
</html>
