
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>@yield('title') | {{ $settings->get('app_name') }}</title>
    <meta name="description" content="@yield('meta_description')">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="@yield('og:image')">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

<!-- Header section -->
<header class="header_blog">
    <div class="container">
        <div class="site_name col-lg-5 col-md-2 col-sm-2">
            {{ $settings->get('app_name') }}
        </div>

        <nav class="navigation_blog col-lg-7 col-md-10 col-sm-10 hidden-xs">
            <ul>
                @foreach($pages as $page)
                    <li><a href="{{ route($page->key) }}">{{ $page->name }}</a></li>
                @endforeach

            </ul>
        </nav>

        <a href="#" class="hamburger pages second hamburger--spin hidden-lg hidden-md hidden-sm" id="open_menu">
            <span class="hamburger-box"><span class="hamburger-inner"></span></span>
        </a>

        <!-- Caption -->
        <div class="caption_pages col-lg-12 col-md-12 col-sm-12 col-xs-12">

            @yield('name')

            <div class="breadcrumbs">Главная > @yield('breadcrumbs')</div>

        </div>
        <!-- End Caption -->

    </div>

    <!-- Navigation for small devices -->
    <nav class="sm-navigation">

        <ul class="sm-menu">
            @foreach($pages as $page)
                <li><a href="{{ route($page->key) }}">{{ $page->name }}</a></li>
            @endforeach
        </ul>


        <ul class="social-menu">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>

        <div class="close">
            <i class="fas fa-times"></i>
        </div>

    </nav>
    <!-- End Navigation for small devices -->

</header>

<!-- Content -->
@yield('content')
<!-- End Content -->

<!-- Footer -->
<section class="footer">

    <div class="container">

        <!-- Contact -->
        <div class="col-lg-3">

            <div class="footer_caption">
                Контакты
            </div>

            <ul class="footer_list">
                <li><i class="far fa-envelope"></i> {{ $settings->get('email') }}</li>
                <li><i class="fas fa-phone"></i> {{ $settings->get('tel') }}</li>
                <li><i class="fas fa-phone"></i> {{ $settings->get('tel2') }}</li>
                <li><i class="fas fa-map-marker-alt"></i> {{ $settings->get('address') }}</li>
            </ul>

            <form id="footer_form" action="{{ route('footer') }}#online_consult" method="post" class="footer_form" onsubmit="sendForm(this); return false;">
                {{ csrf_field() }}
                <input type="email" required placeholder="Ваш E-Mail" class="footer_input" name="email">
                <input type="submit" class="hidden" id="footer_form_submit">
                <a href="#" class="send_footer_button" onclick="$('#footer_form_submit').click(); return false;"><i class="fas fa-paper-plane"></i></a>
            </form>
        </div>
        <!-- End Contact -->

        <!-- About Us -->
        <div class="col-lg-5">

            <div class="footer_caption ml">
                О нас
            </div>

            <div class="about_us_footer">
                {{ $settings->get('about') }}
            </div>

        </div>
        <!-- End About Us -->

        <!-- Recent Project -->
        <div class="col-lg-4">

            <div class="footer_caption">
                Недавние проекты
            </div>


            <div class="owl-carousel footer_carousel">
                @foreach($lastWorks as $item)
                <div class="item">

                    <a href="{{ route('portfolio') }}"><img src="/{{ $item }}" alt=""></a>

                </div>
                @endforeach
            </div>

        </div>
        <!-- End Recent Project -->

        <!-- Footer navigation -->
        <div class="col-lg-12">

            <div class="footer_caption_nav">
                {{ $settings->get('app_name') }}
            </div>

            <nav class="footer_nav">
                <ul>
                    @foreach($pages as $page)
                        <li><a href="{{ route($page->key) }}">{{ $page->name }}</a></li>
                    @endforeach
                </ul>
            </nav>

        </div>
        <!-- End Footer navigation -->

    </div>

    <!-- Footer info -->

    <div class="footer_info">
        {{ date('Y') }} Все права защищены ©
    </div>
    <!-- End Footer info -->

</section>
<!-- End Footer -->

<link rel="stylesheet" href="/css/main.min.css">
<script src="/js/scripts.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script>
    function sendForm(elem) {
        // elem = '#' + id;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: $(elem).attr('action'),
            type: "POST",
            data: $(elem).serialize(),
            dataType: "json",
            success: function(data) {
                $(elem).html('<div class="footer_caption">' + data.success + '</div>');
                // $('body').find('div.button.send.col-lg-12.col-md-12').remove();
            },
            error:function (data) {
                var errors = $.parseJSON(data.responseText);

                // $(elem).find('.help-block').remove();
                $.each(errors['errors'], function(index, value) {
                    console.log(index + ' => ' + value);
                    //     $(elem).find('input[name=' + index + ']').after('<span class="help-block">' + value + '</span>');
                });
            },
            complete:function () {
                try {}
                finally {
                }
            }
        });
        return false;
    }
</script>
</body>
</html>