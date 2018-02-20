<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Ближе к дому</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="г. Владимир. Рекламное агенство Ближе к дому. Мы представляем услуги: реклама в лифтах, реклама у подъездов, изготовление вывесок и объемных букв, полиграфия, дизайн, светодиодная продукция.">

    <link rel="shortcut icon" href="/static/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href=/static/css/style.css rel="stylesheet">
    <link href="/static/css/magnific-popup.css" rel="stylesheet">
    <style>
        .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
            background-color: #373737;
            border: 0;
        }
        .dropdown-menu {
            background-color: #373737;
        }
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-submenu>a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #ccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover>a:after {
            border-left-color: #fff;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

        .dropdown-submenu.pull-left>.dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
            text-decoration: none;
            color: #262626;
            background-color: #d1a14a;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-fixed-top">
    <div class="container-fluid menu_main">

        <button type="button" class="navbar-toggle collapsed clearfix" data-toggle="collapse" data-target="#navbar-main"
                aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <img class="navbar-logo" src="/static/images/navbar-logo.png" alt="Ближе к дому" title="Ближе к дому">


        <div class="menu_main_list_container hidden-xs hidden-sm smooth-scroll">
            <ul class="nav navbar-nav navbar-right menu_main_list">
                <li>
                    <div class="item nav-about"><a href="#about">О НАС</a></div>
                    <hr>
                </li>
                <li>
                    <div class="item nav-services btn-group dropdown">
                        <a href="#services" id="dLabel"
                           data-target="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">УСЛУГИ</a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            <li><a href="#">Some action</a></li>
                            <li><a href="#">Some other action</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">Hover me for more options</a>
                                <ul class="dropdown-menu">
                                    {{--<li><a tabindex="-1" href="#">Second level</a></li>--}}
                                    {{--<li class="dropdown-submenu">--}}
                                        {{--<a href="#">Even More..</a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a href="#">3rd level</a></li>--}}
                                            {{--<li><a href="#">3rd level</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    <li><a href="#">Second level</a></li>
                                    <li><a href="#">Second level</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </li>
                <li>
                    <div class="item nav-reviews"><a href="#reviews">ОТЗЫВЫ</a></div>
                    <hr>
                </li>
           <    <li>
                    <div class="item nav-contacts"><a href="#contacts">КОНТАКТЫ</a></div>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse menu_main_list_vertical_container " id="navbar-main">
            <ul class="nav navbar-nav navbar-right menu_main_list_vertical hidden-md hidden-lg">
                <li>
                    <div class="item nav-about"><a href="#about">О НАС</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
                <li>
                    <div class="item nav-services"><a href="#services">УСЛУГИ</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
                <li>
                    <div class="item nav-reviews"><a href="#reviews">ОТЗЫВЫ</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
                <li>
                    <div class="item nav-contacts"><a href="#contacts">КОНТАКТЫ</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div>
    <div class="header container-fluid">
        <img src='/static/images/top-title.jpg'>
    </div>

    <div class="content container">
        <div id="about" class="about clearfix">
            <hr>
            <span class="title">О НАС</span>
            <p class="text">
                Наша компания один из лидеров на рынке рекламных услуг г. Владимира. Над каждым проектом работает
                команда настоящих профессионалов, которые подходят к каждой своей задаче с необходимой долей
                перфекционизма и креативности. Результатом является качественная и выполненная в срок работа, которой Вы
                довольны.
            </p>

            <div class="achievements clearfix">
                <div class="title col-md-12">Наши принципы</div>
                <div class="item first col-md-4">
                    <img src=/static/images/achievement-item-1.png>
                    <div>КРЕАТИВНОСТЬ</div>
                </div>
                <div class="item second col-md-4">
                    <img src=/static/images/achievement-item-2.png>
                    <div>КАЧЕСТВО</div>
                </div>
                <div class="item third col-md-4">
                    <img src=/static/images/achievement-item-3.png>
                    <div>ПУНКТУАЛЬНОСТЬ</div>
                </div>

            </div>
        </div>
        <div id="services" class="services clearfix">
            <img class="title" src=/static/images/services-title.png>
            <div class="items">
                @foreach($banners as $banner)
                <div class="item col-md-6 {{$banner->color}}">
                    <img src="{{$banner->image}}">
                    <span class="title">{{$banner->title}}</span>
                    <a href="{{$banner->link}}">Подробнее</a>
                    <hr class="vertical">
                    <hr class="horizontal">
                </div>
                @endforeach
            </div>
        </div>
        <div class="service-footer clearfix">
            <div class="content clearfix">
                <div class="portfolio col-xs-12 col-md-6">
                    @if ($gallery)
                        <div class="image">
                            <img src={{$gallery->cover}}>
                            <div class="overlay"></div>
                        </div>
                        <div class="info">
                            <span>{{$gallery->title}}</span>
                            <span> И ЕЩЁ {{$count_work}}<span class="portfolio-ending"></span> В НАШЕМ ПОРТФОЛИО</span>
                            <a href="{{route('galleries')}}">НАШИ РАБОТЫ</a>
                        </div>
                    @endif
                </div>
                @if (\Session::has('back_call'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('back_call') }}</p>
                    </div><br/>
                @endif
                <form class="additional col-xs-12 col-md-6" id="additional-order-form" action="{{route('back_call')}}"
                      method="post">
                    {{ csrf_field() }}
                    <hr class="vertical">
                    <span class="title">Для УК и ТСЖ</span>
                    <div class="inputs">
                        {{--<input name="title" placeholder="Заголовок" style="display: none">--}}
                        <input required name="author" placeholder="Имя">
                        <input required name="phone" placeholder="Телефон" type="tel">
                        <input required name="email" placeholder="Email" type="email">
                        <label>
                            <input type="checkbox" checked required>
                            Согласен с <a href="" target="_blank" style="">политикой конфиденциальности</a>
                        </label>
                    </div>
                    <a class="for_companies" href="/static/tzh.docx">
                        <img src="/static/images/doc.png">
                        <span>Скачать <br>ком. предложение</span>
                    </a>
                    {{--<input type="submit" value="ЗАКАЗАТЬ ЗВОНОК">--}}
                    <button type="submit">ЗАКАЗАТЬ ЗВОНОК</button>
                </form>
            </div>
        </div>
        <div id="reviews" class="slider clearfix hidden-xs">
            <span>ОТЗЫВЫ</span>
            <div class="arrow left">
                <img src="/static/images/arrow-left.png">
            </div>

            <div class="slide">
                @foreach($reviews as $review)
                <div class="main">
                    <img src="{{$review->background}}" class="background">
                    <div class="overflow"></div>
                    <div class="slide-info">
                        <div class="pseudo-anchor"></div>
                        <div class="client-info clearfix">
                            <img src="{{$review->logo}}" class="logo col-xs-4">
                            <div class="text col-xs-7">
                                <span class="title">{{$review->author}}</span>
                                <p class="info">
                                    {!! $review->text !!}
                                </p>
                            </div>
                        </div>
                        <a href="{{route('reviews')}}" class="gallery">ВСЕ ОТЗЫВЫ</a>
                    </div>
                </div>
                @endforeach

                {{--<div class="advanced">--}}
                    {{--<img class="background">--}}
                    {{--<div class="overflow"></div>--}}
                    {{--<div class="slide-info">--}}
                        {{--<div class="pseudo-anchor"></div>--}}
                        {{--<div class="client-info clearfix">--}}
                            {{--<img class="logo col-xs-4">--}}
                            {{--<div class="text col-xs-7">--}}
                                {{--<span class="title"></span>--}}
                                {{--<p class="info">--}}

                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<button class="gallery">галерея</button>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>

            <div class="nav-group" data-toggle="buttons">
                <div class="btn item active">
                    <input type="radio">
                </div>
            </div>
            <div class="arrow right">
                <img src="/static/images/arrow-right.png">
            </div>
        </div>
        <div id="contacts" class="contacts">
            <div class="title col-xs-12">
                <span>Как с нами связаться?</span>
                <img src="/static/images/contacts-title.png">
            </div>
            <div class="info-row-1 col-xs-12">
                <div class="write col-xs-12 col-md-4">
                    <div class="action-container" data-toggle="modal" data-target=".ask-modal">
                        <img src="/static/images/contacts-write.png">
                        <span>Написать нам</span>
                    </div>
                    <div class="mail">
                        <a href="mailto:{{$settings->get('email1')}}">{{$settings->get('email1')}}</a>
                        <a href="mailto:{{$settings->get('email2')}}">{{$settings->get('email2')}}</a>
                    </div>
                </div>

                <div class="call col-xs-12 col-md-offset-3 col-md-4">
                    <img src="/static/images/contacts-call.png">
                    <span>Позвонить нам</span>
                    <div class="mail">
                        <a href="tel:{{preg_replace('/\D/', '', $settings->get('tel1'))}}">
                            {{$settings->get('tel1')}}
                        </a>
                        <a href="tel:{{preg_replace('/\D/', '', $settings->get('tel2'))}}">
                            {{$settings->get('tel2')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="come-to-office info-row-2 col-xs-12">
                <img src="/static/images/contacts-come-to-office.png">
                <span>Приехать к нам в офис <br>{{$settings->get('address')}}</span>
            </div>
        </div>
    </div>
    <div class="map" id="map"></div>
</div>

<div class="move-top">
    <img src="/static/images/move-top.png">
</div>

<div  class="modal fade ask-modal">
    <div class="modal-dialog">
        @if (\Session::has('ask_question'))
            <div class="alert alert-success">
                <p>{{ \Session::get('ask_question') }}</p>
            </div><br/>
        @endif
        <form class="modal-content" method="post" action="{{route('ask_question')}}">
            {{ csrf_field() }}
            <div class="title">
                <span>Задать вопрос</span>
                <img class="close" data-dismiss="modal" src="/static/images/close_dark.png">
            </div>
            <div class="text">
                Наш менеджер ответит вам в ближайшее время
            </div>
            <input required placeholder="Имя" name="author" type="text" class="center-block">
            <input required placeholder="Электронная почта" name="email" type="email" class="center-block">
            <textarea required placeholder="Ваш вопрос" name="text" class="center-block"></textarea>
            <label>
                <input type="checkbox" checked required>
                Согласен с <a href="" target="_blank" style="">политикой конфиденциальности</a>
            </label>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/static/js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/bootstrap-toolkit.min.js"></script>
<script src="/static/js/jquery.magnific-popup.min.js"></script>

<script src="/static/js/elements/app.js"></script>
{{--<script src=/static/js/elements/picture_slider.js></script>--}}
{{--<script src=/static/js/elements/view_portfolio.js></script>--}}
{{--<script src=/static/js/elements/view_info.js></script>--}}
{{--<script src=/static/js/elements/top_menu_controller.js></script>--}}
{{--<script src=/static/js/elements/move_top.js></script>--}}

<script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
<script>
    ymaps.ready(init);
    var myMap;
    function init() {
        myMap = new ymaps.Map("map", {
            center: [{{$settings->get('geometry')}}],
            behaviors: ['default', 'scrollZoom'],
            zoom: 18
        });
        myMap.controls
            .add('zoomControl', {left: 5, top: 5});
        marker = new ymaps.Placemark([{{$settings->get('geometry')}}], {
            balloonContent: "<span class=\"map-balloon\">{{$settings->get('address')}}</span>"
        }, {
            balloonContentSize: [229, 75],
            balloonLayout: "default#imageWithContent",
            balloonImageHref: '/static/images/marker-background.png',
            balloonImageOffset: [-105, -90],
            balloonImageSize: [229, 75],
            balloonShadow: false
        });
        myMap.geoObjects
            .add(marker);
        marker.balloon.open()
    }
    new TopMenuController($(".navbar-logo"), [
        {'element': $(".nav-about"), 'target': $(".about")},
        {'element': $(".nav-services"), 'target': $(".services")},
        {'element': $(".nav-reviews"), 'target': $(".service-footer")},
        {'element': $(".nav-contacts"), 'target': $(".contacts")}
    ], $('.menu_main').height());

    new MoveTopButton($(".move-top"));

</script>
</body>
</html>