@extends('layouts.app')
@section('breadcrumbs', $page->name)
@section('title', $page->title)
@section('name', $page->name)
@section('meta_description', $page->meta_description)
@section('content')
    <section class="blog_content">

        <div class="container">

            <div class="col-lg-8">

                <!-- Item_1 -->
                <div class="blog_item">

                    <!-- Image -->
                    <div class="img_wrap">
                        <img src="img/751x322.png" alt="">
                    </div>
                    <!-- End Image -->

                    <!-- Article info -->
                    <div class="article_info">

                        <div class="date">
                            10 <div>January</div>
                        </div>

                        <div class="article_name">

                            <a href="#">2018 Web design trends</a>

                            <div class="article_cat_comment">
                                Web Design / 4 <i class="far fa-comment"></i>
                            </div>

                        </div>

                    </div>
                    <!-- End Article info -->

                </div>
                <!-- End Item_1-->

                <!-- Item_2 -->
                <div class="blog_item">

                    <!-- Image -->
                    <div class="img_wrap">
                        <img src="img/751x322.png" alt="">
                    </div>
                    <!-- End Image -->

                    <!-- Article info -->
                    <div class="article_info">

                        <div class="date">
                            08 <div>January</div>
                        </div>

                        <div class="article_name">

                            <a href="#">Cool icons for your web site</a>

                            <div class="article_cat_comment">
                                Web Design / 4 <i class="far fa-comment"></i>
                            </div>

                        </div>

                    </div>
                    <!-- End Article info -->

                </div>
                <!-- End Item_2-->

                <!-- Item_3 -->
                <div class="blog_item">

                    <!-- Image -->
                    <div class="img_wrap">
                        <img src="img/751x322.png" alt="">
                    </div>
                    <!-- End Image -->

                    <!-- Article info -->
                    <div class="article_info">

                        <div class="date">
                            07 <div>January</div>
                        </div>

                        <div class="article_name">

                            <a href="#">"Ultra Violet" color of the year</a>

                            <div class="article_cat_comment">
                                Web Design / 4 <i class="far fa-comment"></i>
                            </div>

                        </div>

                    </div>
                    <!-- End Article info -->

                </div>
                <!-- End Item_3-->

            </div>

            <!-- Sidebar -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <!-- Search -->
                    <div class="search_sidebar">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <!-- End Search -->



                    <!-- Categories -->
                    <div class="categories">

                        <ul>
                            <li><a href="#"><i class="fas fa-paint-brush"></i> Web Design</a></li>
                            <li><a href="#"><i class="fas fa-code"></i> HTML & CSS</a></li>
                            <li><a href="#"><i class="fab fa-wordpress-simple"></i> WordPress</a></li>
                            <li><a href="#"><i class="fab fa-modx"></i> Modx</a></li>
                            <li><a href="#"><i class="far fa-file-alt"></i> SEO</a></li>
                            <li><a href="#"><i class="fab fa-git"></i> GIT / GitHub</a></li>
                        </ul>

                    </div>
                    <!-- End Categories -->

                    <!-- Recent posts -->
                    <div class="recent_posts">

                        <div class="recent_posts_caption">
                            Recent Posts
                        </div>

                        <!-- Item_1 -->
                        <div class="recent_posts_item">

                            <img src="img/53x53.png" alt="">

                            <div class="recent_name">

                                <a href="#">2018 Web design trends</a>

                                <div class="recent_date">
                                    01.12.2018
                                </div>

                            </div>

                        </div>
                        <!-- End Item_1 -->

                        <!-- Item_2 -->
                        <div class="recent_posts_item">

                            <img src="img/53x53.png" alt="">

                            <div class="recent_name">

                                <a href="#">Cool icons for your web site</a>

                                <div class="recent_date">
                                    01.08.2018
                                </div>

                            </div>

                        </div>
                        <!-- End Item_2 -->

                        <!-- Item_3 -->
                        <div class="recent_posts_item">

                            <img src="img/53x53.png" alt="">

                            <div class="recent_name">

                                <a href="#">"Ultra Violet" color of year</a>

                                <div class="recent_date">
                                    01.07.2018
                                </div>

                            </div>

                        </div>
                        <!-- End Item_3 -->

                    </div>
                    <!-- End Recent posts -->

                </div>

            </div>
            <!-- End Sidebar -->

            <!-- Page navigation -->
            <div class="col-lg-12">

                <div class="page_nav">

                    <ul>
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>

                </div>

            </div>
            <!-- End Page navigation -->

        </div>

    </section>
@endsection
