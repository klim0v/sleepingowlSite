@extends('layouts.app')

@section('content')
    <section class="portfolio_content">
    <!-- Services -->
    <div class="container">

        <!-- Filter -->
        <div class="filter">
            <ul>
                <li><a href="#">ALL</a></li>
                <li><a href="#">CONSULTING</a></li>
                <li><a href="#">WORDPRESS</a></li>
                <li><a href="#">UX/UI DESIGN</a></li>
            </ul>
        </div>
        <!-- End Filter -->

        <!-- Items -->

        <!-- Item-1 -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="#">
                    <img src="img/351x234.png" alt="">
                    <div class="work_info">Project #1 <span>4 <i class="far fa-comment"></i> / 02.08.2018</span></div>
                </a>
            </div>

        </div>
        <!-- End Item-1 -->

        <!-- Item-2 -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="#">
                    <img src="img/351x234.png" alt="">
                    <div class="work_info">Project #2 <span>4 <i class="far fa-comment"></i> / 02.08.2018</span></div>
                </a>
            </div>

        </div>
        <!-- End Item-2 -->

        <!-- Item-3 -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="#">
                    <img src="img/351x234.png" alt="">
                    <div class="work_info">Project #3 <span>4 <i class="far fa-comment"></i> / 02.08.2018</span></div>
                </a>
            </div>

        </div>
        <!-- End Item-3 -->

        <!-- Item-4 -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="#">
                    <img src="img/351x234.png" alt="">
                    <div class="work_info">Project #4 <span>4 <i class="far fa-comment"></i> / 02.08.2018</span></div>
                </a>
            </div>

        </div>
        <!-- End Item-4 -->

        <!-- Item-5 -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="#">
                    <img src="img/351x234.png" alt="">
                    <div class="work_info">Project #5 <span>5 <i class="far fa-comment"></i> / 02.08.2018</span></div>
                </a>
            </div>

        </div>
        <!-- End Item-5 -->

        <!-- Item-6 -->
        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="work_item">
                <a href="#">
                    <img src="img/351x234.png" alt="">
                    <div class="work_info">Project #6 <span>4 <i class="far fa-comment"></i> / 02.08.2018</span></div>
                </a>
            </div>

        </div>
        <!-- End Item-6 -->

        <!-- End Items -->

        <div class="button loadmore col-lg-12 col-md-12">

            <a href="#"><span>LOAD MORE</span></a>

        </div>

    </div>
    <!-- End Services -->

</section>
@endsection