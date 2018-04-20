
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->meta_description }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="@yield('og:image')">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>

<body>

<!-- Header section -->
<header class="header">
    <div id="particles-js"></div>
    <!-- Navigation -->
    <nav class="navigation hidden-xs hidden-sm hidden-md">
        <ul>
            @foreach($pages as $page)
                <li><a href="{{ route($page->key) }}">{{ $page->name }}</a></li>
            @endforeach
        </ul>
    </nav>
    <!-- End Navigation  -->

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

    <a href="#" class="hamburger second hamburger--spin hidden-lg" id="open_menu">
        <span class="hamburger-box"><span class="hamburger-inner"></span></span>
    </a>

    <div class="container">
        <!-- Top line -->
        <div class="top_line col-lg-12">

            <ul>

                <li class="left"><i class="far fa-envelope"></i> {{ $settings->get('email') }}</li>
                <li class="center"><i class="fa fa-mobile" aria-hidden="true"></i> {{ $settings->get('tel') }}</li>
                <li class="right">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </li>

            </ul>
            <!-- Search -->
            {{--<div class="search">

                <i class="fa fa-search" aria-hidden="true"></i>

                <div class="search_input">

                    <form action="#">

                        <input type="text" placeholder="Search...">
                        <input type="submit" class="submit_button" value="Go!">

                    </form>

                </div>

            </div>--}}
            <!-- End Search -->

        </div>
        <!-- End Top line -->

        <!-- Caption -->
        <div class="caption">

            <div class="top_phrase col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Рекламное агество
            </div>

            <h1 class="col-lg-12 col-md-12">{{ $settings->get('app_name') }}</h1>

            <div class="bottom_phrase col-lg-12 col-md-12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>

        </div>
        <!-- End Caption -->

        <div class="button col-lg-12 col-md-12">

            <a href="#"><span>О нас</span></a>

        </div>

        <div class="godown col-lg-12 col-md-12">

            <a href="#"><i class="fas fa-angle-down"></i></a>

        </div>

    </div>

</header>
<!-- End Header section -->

<!-- Welcome section -->
<section class="welcome_section">

    <div class="container no-pd">
        <!-- Caption -->
        <h1 class="section_caption">
            Welcome to Delicate
        </h1>

        <div class="lower_caption">
            Maecenas ut metus fermentum, convallis dui nec, dictum risus. Pellentesque sagittis pretium lacus quis pulv
            inar. In sollicitudin id urna vestibulum finibus.
        </div>
        <!-- End Caption -->

        <!-- Counts -->
        <div class="col-lg-4">
            <!-- Experience -->
            <div class="count-1">

                <img src=img/153x121.png alt="">

                <div class="count_caption">
                    15 Years of experience
                </div>

                <div class="count_description">
                    Lorem ipsum dolor sit amet, consec
                    tetur adipiscing elit. Curabitur et cur
                    sus nisi. Proin sit amet erat nec
                    odio rutrum sollicitudin.
                </div>

            </div>
            <!-- End Experience -->
        </div>

        <div class="col-lg-4">
            <!-- Happy client -->
            <div class="count-2">

                <img src="img/121x121.png" alt="">

                <div class="count_caption">
                    900+ Happy clients
                </div>

                <div class="count_description">
                    Lorem ipsum dolor sit amet, consec
                    tetur adipiscing elit. Curabitur et cur
                    sus nisi. Proin sit amet erat nec
                    odio rutrum sollicitudin.
                </div>

            </div>
            <!-- End Happy client -->
        </div>

        <div class="col-lg-4">
            <!-- Awards -->
            <div class="count-3">

                <img src="img/142x121.png" alt="">

                <div class="count_caption">
                    50+ Awards
                </div>

                <div class="count_description">
                    Lorem ipsum dolor sit amet, consec
                    tetur adipiscing elit. Curabitur et cur
                    sus nisi. Proin sit amet erat nec
                    odio rutrum sollicitudin.
                </div>

            </div>
            <!-- End Awards -->
        </div>
        <!-- End Counts -->
    </div>

</section>
<!-- End Welcome section -->

<!-- Services section -->
<section class="services">

    <div class="container">

        <h1 class="section_caption">Наши услуги</h1>

        @foreach($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-6">

                <div class="item_service">
                    <a href="{{ route('single_service', [$service->slug]) }}"><img src="/{{$service->icon}}" alt="{{ $service->name }}"></a>


                    <div class="item_service_name"><a href="{{ route('single_service', [$service->slug]) }}">{{ $service->name }}</a></div>

                    <div class="item_service_description">
                        {!! $service->annotation  !!}
                    </div>

                </div>

            </div>
        @endforeach
        {{--<!-- UX/UI Design -->

        <!-- Analytics -->
        <div class="col-lg-4 col-md-6 col-sm-6">

            <div class="item_service">

                <img src="img/92x90.png" alt="UX/UI Design">

                <div class="item_service_name">ANALYTICS</div>

                <div class="item_service_description">
                    Lorem ipsum dolor sit
                    amet, consectetur
                    adipiscing elit.
                </div>

            </div>

        </div>
        <!-- End Analytics -->

        <!-- Programming -->
        <div class="col-lg-4 col-md-6 col-sm-6">

            <div class="item_service">

                <img src="img/74x90.png" alt="UX/UI Design">

                <div class="item_service_name">PROGRAMMING</div>

                <div class="item_service_description">
                    Lorem ipsum dolor sit
                    amet, consectetur
                    adipiscing elit.
                </div>

            </div>

        </div>
        <!-- End Programming -->

        <!-- Consulting -->
        <div class="col-lg-4 col-md-6 col-sm-6">

            <div class="item_service">

                <img src="img/105x90.png" alt="UX/UI Design">

                <div class="item_service_name">CONSULTING</div>

                <div class="item_service_description">
                    Lorem ipsum dolor sit
                    amet, consectetur
                    adipiscing elit.
                </div>

            </div>

        </div>
        <!-- End Consulting -->

        <!-- Planning -->
        <div class="col-lg-4 col-md-6 col-sm-6">

            <div class="item_service">

                <img src="img/74x90.png" alt="UX/UI Design">

                <div class="item_service_name">PLANNING</div>

                <div class="item_service_description">
                    Lorem ipsum dolor sit
                    amet, consectetur
                    adipiscing elit.
                </div>

            </div>

        </div>
        <!-- End Planning -->

        <!-- Support -->
        <div class="col-lg-4 col-md-6 col-sm-6">

            <div class="item_service">

                <img src="img/87x90.png" alt="UX/UI Design">

                <div class="item_service_name">SUPPORT</div>

                <div class="item_service_description">
                    Lorem ipsum dolor sit
                    amet, consectetur
                    adipiscing elit.
                </div>

            </div>

        </div>
        <!-- End Support -->--}}

    </div>

</section>
<!-- End Services section -->

<!-- Online consulting section -->
<section class="online_consulting">

    <div class="container">

        <!-- Caption -->
        <h1 class="section_caption white">Онлайн консультация</h1>

        <div class="lower_caption grey">
            Maecenas ut metus fermentum, convallis dui nec, dictum risus. Pellentesque sagittis pretium lacus quis pulv
            inar. In sollicitudin id urna vestibulum finibus.
        </div>
        <!-- End Caption -->

        <!-- Form -->
        <form id="online_consult" action="{{ route('online_consult') }}#online_consult" class="consult_form" method="post" onsubmit="sendForm(this); return false;">
        {{ csrf_field() }}
            <!-- Name -->
            <div class="col-lg-6 col-md-6">
                <input type="text" required placeholder="Ваше имя" name="author">
                <span class="tringle"></span>
            </div>
            <!-- End Name -->

            <!-- Email -->
            <div class="col-lg-6 col-md-6">
                <input type="email" required placeholder="E-mail" name="email">
                <span class="tringle"></span>
            </div>
            <!-- End Email -->

            <!-- Phone -->
            <div class="col-lg-6 col-md-6">

                <input type="tel" required placeholder="Телефон" name="phone">
                <span class="tringle"></span>

                <div class="callme_check">

                    <label><input type="checkbox" name="call"> <span>Позвонить мне</span></label>

                </div>

            </div>
            <!-- End Phone -->
            <div class="col-lg-6 col-md-6">
                <input type="text" placeholder="Сообщение" name="text">
                <span class="tringle"></span>
            </div>
            <!-- Message -->

            <!-- End Message -->

                <input type="submit" class="hidden" id="consult_form_submit">

            <div class="button send col-lg-12 col-md-12">
                <a href="#" onclick="$('#consult_form_submit').click(); return false;" {{--onclick="sendForm('online_consult'); return false;"--}}><span>Отправить</span></a>

            </div>
        </form>
        <!-- End Form -->

    </div>

</section>
<!-- End Online consulting section -->

<!-- Latest works section -->
<section class="latest_works">

    <div class="container">
        <!-- Caption -->
        <h1 class="section_caption">Наши недавние проекты</h1>
        <!-- End Caption -->

        <!-- Filter -->
        <div class="filter">
            <ul>
                @foreach($galleryServices as $service)
                    <li><a href="{{ route('portfolio', ['service' => $service->slug]) }}">{{ $service->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- End Filter -->

        <!-- Items -->

    @foreach($galleries as $gallery)
        <!-- Item_{{$loop->iteration}} -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="{{ route('gallery', $gallery->slug) }}">
                    <img src="/{{ $gallery->cover }}" alt="{{ $gallery->name }}">
                    <div class="work_info">{{ $gallery->name }} <span>{{count($gallery->images)}} <i class="far fa-images"></i> / {{ $gallery->created_at }}</span></div>
                </a>
            </div>

        </div>
        <!-- End Item_{{$loop->iteration}} -->
    @endforeach

        <!-- End Items -->

        <div class="button loadmore col-lg-12 col-md-12">

            <a href="#"><span>Смотреть все</span></a>

        </div>

    </div>

</section>
<!-- End Latest works section -->

<!-- How do we work section -->
<section class="how_do_we_work">

    <div class="container">

        <h1 class="section_caption white">How do we work?</h1>

        <!-- Item-1 -->
        <div class="col-lg-3 col-md-3 col-sm-12">

            <div class="step">

                <div class="num">1.</div><div class="cap">PLANNING</div>

                <div class="des">
                    Lorem ipsum dolor sit amet
                    consectetur adipiscing elit.
                    Pellentesque fringilla mollis
                    ex vel ultrices. Aliquam
                </div>

            </div>

        </div>
        <!-- End Item-1 -->

        <!-- Item-2 -->
        <div class="col-lg-3 col-md-3 col-sm-12">

            <div class="step">

                <div class="num">2.</div><div class="cap">DESIGN</div>

                <div class="des">
                    Lorem ipsum dolor sit amet
                    consectetur adipiscing elit.
                    Pellentesque fringilla mollis
                    ex vel ultrices. Aliquam
                </div>

            </div>

        </div>
        <!-- Item-2 -->



        <!-- Item-3 -->
        <div class="col-lg-3 col-md-3 col-sm-12">

            <div class="step">

                <div class="num">3.</div><div class="cap">MAGIC</div>

                <div class="des">
                    Lorem ipsum dolor sit amet
                    consectetur adipiscing elit.
                    Pellentesque fringilla mollis
                    ex vel ultrices. Aliquam
                </div>

            </div>

        </div>
        <!-- End Item-3 -->

        <!-- Item-4 -->
        <div class="col-lg-3 col-md-3 col-sm-12">

            <div class="step">

                <div class="num">4.</div><div class="cap">DEPLOY</div>

                <div class="des">
                    Lorem ipsum dolor sit amet
                    consectetur adipiscing elit.
                    Pellentesque fringilla mollis
                    ex vel ultrices. Aliquam
                </div>

            </div>

        </div>
        <!-- End Item-4 -->
    </div>

</section>
<!-- End How do we work section -->
<!-- Our Team section -->
{{--
<section class="our_team">

    <div class="container">

        <!-- Caption -->
        <h1 class="section_caption">Meet our Team</h1>

        <div class="lower_caption">Maecenas ut metus fermentum, convallis dui nec, dictum risus. Pellentesque sagittis pretium lacus 	 quis pulv
            inar. In sollicitudin id urna vestibulum finibus.
        </div>
        <!-- End Caption -->

        <!-- Team_item-1 -->
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="team_item">

                <div class="team_hover">

                    <div class="team_name">David Regan</div>

                    <div class="team_description">
                        Lorem ipsum dolor sit amet, consect
                        etur adipiscing elit. Sed mattis vest
                        ibulum magna, eu viverra mi
                        euismod sed. Vivamus vel
                        ante eu turpis
                    </div>

                    <ul class="team_social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>

                </div>

                <img src="img/350x478.png" alt="">

            </div>

        </div>
        <!-- End Team_item-1 -->

        <!-- Team_item-2 -->
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="team_item">

                <div class="team_hover">

                    <div class="team_name">Kate Delicate</div>

                    <div class="team_description">
                        Lorem ipsum dolor sit amet, consect
                        etur adipiscing elit. Sed mattis vest
                        ibulum magna, eu viverra mi
                        euismod sed. Vivamus vel
                        ante eu turpis
                    </div>

                    <ul class="team_social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>

                </div>

                <img src="img/350x478.png" alt="">

            </div>

        </div>
        <!-- End Team_item-2 -->

        <!-- Team_item-3 -->
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="team_item">

                <div class="team_hover">

                    <div class="team_name">John Michels</div>

                    <div class="team_description">
                        Lorem ipsum dolor sit amet, consect
                        etur adipiscing elit. Sed mattis vest
                        ibulum magna, eu viverra mi
                        euismod sed. Vivamus vel
                        ante eu turpis
                    </div>

                    <ul class="team_social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>

                </div>

                <img src="img/350x478.png" alt="">


            </div>

        </div>
        <!-- End Team_item-3 -->

    </div>

</section>--}}
<!-- Skills/Testimonials section -->
{{--
<section class="skills">

    <div class="container">

        <!-- Captions -->
        <div class="col-lg-6">
            <h1 class="double_caption">Our Skills</h1>
        </div>

        <div class="col-lg-6">
            <h1 class="double_caption">Testimonials</h1>
        </div>
        <!-- End Captions -->

        <!-- Skills -->
        <div class="col-lg-6">

            <div class="skills_container">

                <!-- Skill_1 -->
                <div class="skill_1">
                    <div class="bar"><div class="bar_color"><p>70%</p></div></div>
                    <div class="skill_name">WORDPRESS</div>
                </div>
                <!-- End Skill_1 -->

                <!-- Skill_2 -->
                <div class="skill_2">
                    <div class="bar"><div class="bar_color"><p>80%</p></div></div>
                    <div class="skill_name">PROGRAMMING</div>
                </div>
                <!-- End Skill_2 -->

                <!-- Skill_3 -->
                <div class="skill_3">
                    <div class="bar"><div class="bar_color"><p>90%</p></div></div>
                    <div class="skill_name">DESIGN</div>
                </div>
                <!-- End Skill_3 -->

                <!-- Skill_4 -->
                <div class="skill_4">
                    <div class="bar"><div class="bar_color"><p>60%</p></div></div>
                    <div class="skill_name">TESTING</div>
                </div>
                <!-- End Skill_4 -->

            </div>

        </div>
        <!-- End Skills -->

        <!-- Testimonials -->
        <div class="col-lg-6">

            <div class="owl-carousel">

                <!-- Item_1 -->
                <div class="item">

                    <img src="img/128x128.png" alt="">

                    <div class="comment_name">Eric Morgan</div>

                    <div class="comment_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                        tis vestibulum magna, eu viverra mi euismod sed.
                        ante eu turpis ornare laoreet.
                    </div>

                </div>
                <!-- End Item_1 -->

                <!-- Item_2 -->
                <div class="item">

                    <img src="img/128x128.png" alt="">

                    <div class="comment_name">John Yankee</div>

                    <div class="comment_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at
                        tis vestibulum magna, eu viverra mi euismod sed.
                        ante eu turpis ornare laoreet.
                    </div>

                </div>
                <!-- End Item_2 -->

            </div>

        </div>
        <!-- End Testimonials -->
    </div>

</section>
<!-- End Skills/Testimonials section -->--}}
<!-- Plans section -->
{{--
<section class="plans">

    <div class="container">
        <!-- Caption -->
        <h1 class="section_caption">Our Plans</h1>

        <div class="lower_caption">
            Maecenas ut metus fermentum, convallis dui nec, dictum risus. Pellentesque sagittis pretium lacus quis pulv
            inar. In sollicitudin id urna vestibulum finibus.
        </div>
        <!-- End Caption -->

        <!-- Item_1 -->
        <div class="col-lg-4 col-md-4">

            <div class="plan_bg">
                <!-- Price -->
                <div class="plan_price">
                    75<sup>$</sup>
                    <div class="per_month">PER MONTH</div>
                </div>
                <!-- End Price -->

                <!-- Plan name -->
                <div class="plan_name">
                    SMALL
                </div>
                <!-- End Plan name -->

                <!-- Plan features -->
                <ul class="features">
                    <li><i class="fas fa-check"></i> 50+ Coffee cups</li>
                    <li><i class="fas fa-check"></i> Free wi-fi</li>
                    <li><i class="fas fa-check"></i> Cool tutorial</li>
                    <li class='no-active'><i class="fas fa-times"></i> Free consultation</li>
                    <li class='no-active'><i class="fas fa-times"></i> Support</li>
                    <li class='no-active'><i class="fas fa-times"></i> 100+ Free lessons</li>
                    <li class='no-active'><i class="fas fa-times"></i> Life time acces</li>
                </ul>
                <!-- End Plan features -->

                <!-- Button -->
                <div class="button plan">

                    <a href="#"><span>SELECT PLAN</span></a>

                </div>
                <!-- End Button -->
            </div>

        </div>
        <!-- End Item_1 -->

        <!-- Item_2 -->
        <div class="col-lg-4 col-md-4">

            <div class="plan_bg green">
                <!-- Price -->
                <div class="plan_price">
                    100<sup>$</sup>
                    <div class="per_month">PER MONTH</div>
                </div>
                <!-- End Price -->

                <!-- Plan name -->
                <div class="plan_name">
                    MEDIUM
                </div>
                <!-- End Plan name -->

                <!-- Plan features -->
                <ul class="features">
                    <li><i class="fas fa-check"></i> 50+ Coffee cups</li>
                    <li><i class="fas fa-check"></i> Free wi-fi</li>
                    <li><i class="fas fa-check"></i> Cool tutorial</li>
                    <li><i class="fas fa-check"></i> Free consultation</li>
                    <li><i class="fas fa-check"></i> Support</li>
                    <li class='no-active'><i class="fas fa-times"></i> 100+ Free lessons</li>
                    <li class='no-active'><i class="fas fa-times"></i> Life time acces</li>
                </ul>
                <!-- End Plan features -->

                <!-- Button -->
                <div class="button plan">

                    <a href="#"><span>SELECT PLAN</span></a>

                </div>
                <!-- End Button -->
            </div>

        </div>
        <!-- End Item_2 -->

        <!-- Item_3 -->
        <div class="col-lg-4 col-md-4">

            <div class="plan_bg red">
                <!-- Price -->
                <div class="plan_price">
                    125<sup>$</sup>
                    <div class="per_month">PER MONTH</div>
                </div>
                <!-- End Price -->

                <!-- Plan name -->
                <div class="plan_name">
                    LARGE
                </div>
                <!-- End Plan name -->

                <!-- Plan features -->
                <ul class="features">
                    <li><i class="fas fa-check"></i> 50+ Coffee cups</li>
                    <li><i class="fas fa-check"></i> Free wi-fi</li>
                    <li><i class="fas fa-check"></i> Cool tutorial</li>
                    <li><i class="fas fa-check"></i> Free consultation</li>
                    <li><i class="fas fa-check"></i> Support</li>
                    <li><i class="fas fa-check"></i> 100+ Free lessons</li>
                    <li><i class="fas fa-check"></i> Life time acces</li>
                </ul>
                <!-- End Plan features -->

                <!-- Button -->
                <div class="button plan">

                    <a href="#"><span>SELECT PLAN</span></a>

                </div>
                <!-- End Button -->
            </div>

        </div>
        <!-- End Item_3 -->

    </div>

</section>
<!-- End Plans section -->
--}}

<!-- Frequently asked questions -->

<section class="questions">

    <div class="container">
{{--
    @component('components.questions')
    @endcomponent
--}}
        <!-- Question form -->
    @component('components.question_form')
    @endcomponent
        <!-- End Question form -->

    </div>

</section>

<!-- End Frequently asked questions -->

<!-- Footer -->
<section class="footer">

    <div class="container">

        <!-- Contact -->
        <div class="col-lg-3">

            <div class="footer_caption">
                Contact
            </div>

            <ul class="footer_list">
                <li><i class="far fa-envelope"></i> {{ $settings->get('email') }}</li>
                <li><i class="fas fa-phone"></i> {{ $settings->get('tel') }}</li>
                <li><i class="fas fa-map-marker-alt"></i> {{ $settings->get('address') }}</li>
            </ul>

            <form id="footer_form" action="{{ route('online_consult') }}#online_consult" method="post" class="footer_form" onsubmit="sendForm(this); return false;">
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

                @foreach($galleries as $item)
                    <div class="item">

                        <a href="{{ route('gallery', [$item->slug]) }}"><img src="/{{ $item->cover }}" alt=""></a>

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

<link rel="stylesheet" href="css/main.min.css">
<script src="js/scripts.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script>
    function sendForm(elem) {
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
                    $(elem)[0].reset();
                    $(elem).after('<div id="success" class="quest_form_caption">' + data.success + '</div>');
                setTimeout("$('#success').remove()", 5000);
                    },
            error:function (data) {
                errors = $.parseJSON(data.responseText);
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