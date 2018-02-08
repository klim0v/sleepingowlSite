{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--@endsection--}}

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
    <link href=/static/css/bootstrap.min.css rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href=/static/css/style.css rel="stylesheet">
    {{--<link href="/static/css/magnific-popup.css" rel="stylesheet">--}}
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

        <img class="navbar-logo" src=/static/images/navbar-logo.png>


        <div class="menu_main_list_container hidden-xs hidden-sm">
            <ul class="nav navbar-nav navbar-right menu_main_list">
                <li>
                    <div class="item nav-about"><a>О НАС</a></div>
                    <hr>
                </li>
                <li>
                    <div class="item nav-services"><a>УСЛУГИ</a></div>
                    <hr>
                </li>
                <li>
                    <div class="item nav-reviews"><a>ОТЗЫВЫ</a></div>
                    <hr>
                </li>
                <li>
                    <div class="item nav-contacts"><a>КОНТАКТЫ</a></div>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse menu_main_list_vertical_container " id="navbar-main">
            <ul class="nav navbar-nav navbar-right menu_main_list_vertical hidden-md hidden-lg">
                <li>
                    <div class="item nav-about"><a>О НАС</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
                <li>
                    <div class="item nav-services"><a>УСЛУГИ</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
                <li>
                    <div class="item nav-reviews"><a>ОТЗЫВЫ</a>
                        <div class="pseudo-anchor"></div>
                    </div>
                </li>
                <li>
                    <div class="item nav-contacts"><a>КОНТАКТЫ</a>
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
        <div class="about clearfix">
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
        <div class="services clearfix">
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
                            <span>{{$gallery->title}}</span><br>
                            <span> И ЕЩЁ {{$count_work}}<span class="portfolio-ending"></span> В НАШЕМ ПОРТФОЛИО</span>
                            <a href="{{route('galleries')}}">НАШИ РАБОТЫ</a>
                        </div>
                    @endif
                </div>

                <form class="additional col-xs-12 col-md-6" id="additional-order-form" action="/backcall_add"
                      method="post">
                    <input type='hidden' name='csrfmiddlewaretoken' value='RuiEr5PkQ9CAKvvQSVbTtDxYhQg8My2J'/>
                    <hr class="vertical">
                    <span class="title">Для УК и ТСЖ</span>
                    <div class="inputs">
                        <input required name="name" placeholder="Ваше имя">
                        <input required name="number" placeholder="Номер телефона">
                    </div>
                    <a class="for_companies" href="/static/tzh.docx">
                        <img src=/static/images/doc.png>
                        <br>
                        <span>Скачать <br> ком. предложение</span>
                    </a>
                    <button>ЗАКАЗАТЬ ЗВОНОК</button>
                </form>
            </div>
        </div>
        <div class="slider clearfix hidden-xs">
            <span>ОТЗЫВЫ</span>
            <div class="arrow left">
                <img src=/static/images/arrow-left.png>
            </div>
            <div class="slide">
                <div class="main">
                    <img class="background">
                    <div class="overflow"></div>
                    <div class="slide-info">
                        <div class="pseudo-anchor"></div>
                        <div class="client-info clearfix">
                            <img class="logo col-xs-4">
                            <div class="text col-xs-7">
                                <span class="title"></span>
                                <p class="info">

                                </p>
                            </div>
                        </div>
                        <button class="gallery">галерея</button>
                    </div>
                </div>

                <div class="advanced">
                    <img class="background">
                    <div class="overflow"></div>
                    <div class="slide-info">
                        <div class="pseudo-anchor"></div>
                        <div class="client-info clearfix">
                            <img class="logo col-xs-4">
                            <div class="text col-xs-7">
                                <span class="title"></span>
                                <p class="info">

                                </p>
                            </div>
                        </div>
                        <button class="gallery">галерея</button>
                    </div>
                </div>

            </div>
            <div class="nav-group" data-toggle="buttons">
                <div class="btn item active">
                    <input type="radio">
                </div>
            </div>
            <div class="arrow right">
                <img src=/static/images/arrow-right.png>
            </div>
        </div>
        <div class="contacts">
            <div class="title col-xs-12">
                <span>Как с нами связаться?</span>
                <img src=/static/images/contacts-title.png>
            </div>
            <div class="info-row-1 col-xs-12">
                <div class="write col-xs-12 col-md-4">
                    <div class="action-container" data-toggle="modal" data-target=".ask-modal">
                        <img src=/static/images/contacts-write.png>
                        <span>Написать нам</span>
                    </div>
                    <div class="mail">
                        <a href="mailto:{{$settings->get('email1')}}">{{$settings->get('email1')}}</a>
                        <a href="mailto:{{$settings->get('email2')}}">{{$settings->get('email2')}}</a>
                    </div>
                </div>

                <div class="call col-xs-12 col-md-offset-3 col-md-4">
                    <img src=/static/images/contacts-call.png>
                    <span>Позвонить нам<br>
                        <a href="tel:{{preg_replace('/\D/', '', $settings->get('tel1'))}}">
                            {{$settings->get('tel1')}}
                        </a>
                        <a href="tel:{{preg_replace('/\D/', '', $settings->get('tel2'))}}">
                            {{$settings->get('tel2')}}
                        </a>
                    </span>
                </div>
            </div>
            <div class="come-to-office info-row-2 col-xs-12">
                <img src=/static/images/contacts-come-to-office.png>
                <span>Приехать к нам в офис<br>г. Владимир, ул. Проспект Ленина 7</span>
            </div>
        </div>
    </div>
    <div class="map" id="map">

    </div>
</div>

<div class="move-top">
    <img src=/static/images/move-top.png>
</div>


<div class="modal fade view-info-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content clearfix">
            <img class="close" data-dismiss="modal" src="/static/images/close_white.png">
            <div class="cover">
                <img>
                <form method="get">
                    <button class="get-price" type="submit">ПОЛУЧИТЬ ПРАЙС</button>
                </form>
                <div class="title"></div>
            </div>
            <div class="text">
            </div>
        </div>
    </div>
</div>

<div class="modal fade view-portfolio-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content clearfix">
            <img class="close" data-dismiss="modal" src="/static/images/close_white.png">
            <div class="images portfolio">

                <div id="portfolio-item5" class="item col-md-6 col-xs-12">
                    <div class="info">
                        <div class="pseudo-anchor"></div>
                        <div class="data">
                            <img class="logo" src="/media/portfolio/logos/sb_h0gVrc3.png">
                            <div class="item-title">Ночной клуб «Санта Барбара»</div>
                        </div>
                    </div>

                    <div class="image" style="background-image: url('/media/portfolio/covers/cover.jpg')"></div>
                </div>

                <div id="portfolio-item6" class="item col-md-6 col-xs-12">
                    <div class="info">
                        <div class="pseudo-anchor"></div>
                        <div class="data">
                            <img class="logo" src="/media/portfolio/logos/tele2_keEO1hF.png">
                            <div class="item-title">TELE 2</div>
                        </div>
                    </div>

                    <div class="image" style="background-image: url('/media/portfolio/covers/cover_B51oaTm.jpg')"></div>
                </div>

                <div id="portfolio-item7" class="item col-md-6 col-xs-12">
                    <div class="info">
                        <div class="pseudo-anchor"></div>
                        <div class="data">
                            <img class="logo" src="/media/portfolio/logos/medilon.png">
                            <div class="item-title">ООО «Медилон-Фармимэкс»</div>
                        </div>
                    </div>

                    <div class="image" style="background-image: url('/media/portfolio/covers/155175.jpg')"></div>
                </div>

                <div id="portfolio-item8" class="item col-md-6 col-xs-12">
                    <div class="info">
                        <div class="pseudo-anchor"></div>
                        <div class="data">
                            <img class="logo" src="/media/portfolio/logos/mts_cjTH4DR.png">
                            <div class="item-title">МТС</div>
                        </div>
                    </div>

                    <div class="image" style="background-image: url('/media/portfolio/covers/cover_MHu1rqi.jpg')"></div>
                </div>

                <div id="portfolio-item9" class="item col-md-6 col-xs-12">
                    <div class="info">
                        <div class="pseudo-anchor"></div>
                        <div class="data">
                            <img class="logo" src="/media/portfolio/logos/24O9QSB501t6zQI2cvHP3loU5BnfW6_5Kiu7hC.png">
                            <div class="item-title">Единая Россия</div>
                        </div>
                    </div>

                    <div class="image"
                         style="background-image: url('/media/portfolio/covers/3e0c263071332c093c7de68409094cff.jpg')"></div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="modal fade ask-modal">
    <div class="modal-dialog">
        <form class="modal-content">
            <input type='hidden' name='csrfmiddlewaretoken' value='RuiEr5PkQ9CAKvvQSVbTtDxYhQg8My2J'/>
            <div class="title">
                <span>Задать вопрос</span>
                <img class="close" data-dismiss="modal" src="/static/images/close_dark.png">
            </div>
            <div class="text">
                Наш менеджер ответит вам в ближайшее время
            </div>
            <input required placeholder="Имя" name="name" type="text" class="center-block">
            <input required placeholder="Электронная почта" name="email" type="mail" class="center-block">
            <textarea required placeholder="Ваш вопрос" name="question" class="center-block"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="/static/js/jquery-1.11.3.min.js"></script>--}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{--<script src="/static/js/bootstrap.min.js"></script>--}}
{{--<script src="/static/js/bootstrap-toolkit.min.js"></script>--}}
{{--<script src="/static/js/jquery.magnific-popup.min.js"></script>--}}

{{--<script src="/static/js/elements/ask.js"></script>--}}
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
        ;
        myMap = new ymaps.Map("map", {
            center: [56.121445, 40.380277],
            behaviors: ['default', 'scrollZoom'],
            zoom: 18
        });
        myMap.controls
            .add('zoomControl', {left: 5, top: 5})
        ;


        marker = new ymaps.Placemark([56.121291, 40.380491], {
            balloonContent: '<span class="map-balloon">г. Владимир, ул. Проспект Ленина 7</span>'
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


    $.extend(true, $.magnificPopup.defaults, {
        tClose: 'Закарыть (Esc)',
        tLoading: 'Загрузка...',
        gallery: {
            tPrev: 'Предыдущая',
            tNext: 'Следующая',
            tCounter: '%curr% из %total%'
        },
        image: {
            tError: '<a href="%url%">Изображение</a> не удалось загрузить.'
        }
    });


    new ViewInfo($(".services"), function (modalWindow) {
        modalWindow.find(".tab:first-of-type").click();
    });

    new TopMenuController($(".navbar-logo"), [
        {'element': $(".nav-about"), 'target': $(".about")},
        {'element': $(".nav-services"), 'target': $(".services")},
        {'element': $(".nav-reviews"), 'target': $(".service-footer")},
        {'element': $(".nav-contacts"), 'target': $(".contacts")}
    ], $('.menu_main').height());

    new MoveTopButton($(".move-top"));

    var portfolioCount = 5 - 1;
    var ending = $(".portfolio-ending");
    var endingValue = "";

    if (portfolioCount < 5 || portfolioCount > 20) {
        var numValue = portfolioCount % 10;
        if (numValue == 1)
            endingValue = "а";
        else if (numValue > 1 && numValue < 5)
            endingValue = "ы";
    }

    ending.html(endingValue);


</script>
</body>
</html>