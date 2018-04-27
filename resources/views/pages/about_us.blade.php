@extends('layouts.app')

@section('meta_description', $page->meta_description)
@section('breadcrumbs', $page->name)
@section('title', $page->title)
@section('name', $page->name)
@section('content')
<!-- Description -->
<section class="about_us_content">

    <div class="container">
        <!-- About Us Text -->
        <h1 class="section_caption">{{ $page->heading }}</h1>
        <div class="filter"></div>
        <div class="col-lg-6 col-md-6">

            <div class="about_us_caption">
                <span>20</span> Years of experience made everything
            </div>



            <div class="about_us_description">
                {!! $page->description !!}
            </div>

            <div class="button loadmore about">

                <a href="#"><span>Написать нам</span></a>

            </div>

        </div>
        <!-- End About Us Text -->

        <!-- Image -->
        <div class="col-lg-6 col-md-6">

            <div class="about_image">
                <img src="img/563x375.png" alt="">
            </div>

        </div>
        <!-- End Image -->
    </div>

</section>
<!-- End Description -->

{{--
<!-- Counts -->
<section class="counts">

    <div class="container">
        <!-- Projects done -->
        <div class="col-lg-3 col-md-3 col-sm-6">

            <div class="count_wrap">
                <img src="img/100x100.png" alt="">
                <div class="count_number">100+</div>
                <div class="count_name">Projects done</div>
            </div>

        </div>
        <!-- End Projects done -->

        <!-- Happy clients -->
        <div class="col-lg-3 col-md-3 col-sm-6">

            <div class="count_wrap">
                <img src="img/100x100.png" alt="">
                <div class="count_number">180+</div>
                <div class="count_name">Happy clients</div>
            </div>

        </div>
        <!-- End Happy clients -->

        <!-- Experience -->
        <div class="col-lg-3 col-md-3 col-sm-6">

            <div class="count_wrap">
                <img src="img/100x100.png" alt="">
                <div class="count_number">12</div>
                <div class="count_name">Years experience</div>
            </div>

        </div>
        <!-- End Experience -->

        <!-- Awards -->
        <div class="col-lg-3 col-md-3 col-sm-6">

            <div class="count_wrap">
                <img src="img/100x100.png" alt="">
                <div class="count_number">55</div>
                <div class="count_name">Awards</div>
            </div>

        </div>
        <!-- End Awards -->

    </div>

</section>
<!-- End Counts -->
--}}
{{--
<!-- Team -->

<section class="our_team">

    <div class="container">

        <!-- Caption -->
        <h1 class="section_caption">Meet our Team</h1>

        <div class="lower_caption mb">Maecenas ut metus fermentum, convallis dui nec, dictum risus. Pellentesque sagittis pretium lacus 	 quis pulv
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

</section>
<!-- End Team -->
--}}
@endsection
