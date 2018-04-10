@extends('layouts.app')

@section('content')
    <section class="blog_content">

    <div class="container">

        <div class="col-lg-8">
            <!-- Caption -->
            <div class="blog_single_caption">
                2018 Web design trends
            </div>
            <!-- End Caption -->

            <!-- Date -->
            <div class="blog_single_date">
                01.10.2018 - Web Design / 4 <i class="far fa-comment"></i>
            </div>
            <!-- End Date -->

            <!-- Image -->
            <div class="blog_single_image">
                <img src="img/751x322.png" alt="">
            </div>
            <!-- End Image -->

            <!-- Text -->
            <div class="blog_single_text">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis diam a laoreet malesuada. In dui lorem, suscipit eget lacinia id, convallis vel purus. Mauris id lectus a orci pharetra placerat. Etiam eu sapien condimentum, imperdiet diam in, dapibus leo. Duis scelerisque molestie varius. Nulla facilisi. Sed at massa lacinia, condimentum mauris nec, bibendum mauris. Cras bibendum rutrum nunc eget sagittis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non luctus ligula. Ut eget eros lorem. Proin dapibus vel enim nec sollicitudin.
                </p>

                <p>
                    Vivamus nibh felis, bibendum vel consequat quis, facilisis vitae lorem. Nunc gravida ut ex at consequat. Pellentesque eu feugiat est. Morbi laoreet tellus in leo congue porttitor. Cras sem eros, luctus ac ornare vel, viverra eu velit. Vestibulum condimentum augue tortor, in facilisis massa tincidunt quis. Nunc dictum sapien dolor, at tempor libero facilisis eget. Suspendisse non scelerisque libero, vitae maximus ipsum. Ut ornare odio sed aliquet aliquet.
                </p>

                <img src="img/438x291.png" alt="">

                <p>
                    Etiam lacinia eros quis malesuada mollis. Sed vitae faucibus nisl. Aliquam et dolor iaculis, condimentum turpis sed, molestie massa. In et ante lacinia, iaculis eros id, auctor lacus. Quisque quam neque, ullamcorper sed cursus non, mattis non massa. Nam varius, ex sit amet aliquet volutpat, diam felis tempus elit, eget iaculis lorem elit at orci.
                </p>

            </div>
            <!-- End Text -->

            <!-- Comments -->
            <div class="blog_single_comments">
                <!-- Caption -->
                <div class="blog_single_comments_caption">
                    Comments
                </div>
                <!-- End Caption -->

                <!-- Item -->
                <div class="blog_single_comments_wrap">
                    <!-- Image -->
                    <img src="img/90x90.png" alt="">
                    <!-- End Image -->

                    <!-- Name -->
                    <div class="blog_single_comments_name">
                        David Black <span>/ 01.10.2018</span>
                    </div>
                    <!-- End Name -->

                    <!-- Text -->
                    <div class="blog_single_comments_text">
                        In nec risus vel turpis facilisis aliquet. Donec eget sollicitudin massa. Ut a tincidunt quam, vitae efficitur arcu. Donec aliquet erat sed est rhoncus, vitae laoreet ante tristique.
                    </div>
                    <!-- End Text -->

                </div>
                <!-- End Item -->

                <!-- Item-2 -->
                <div class="blog_single_comments_wrap">
                    <!-- Image -->
                    <img src="img/90x90.png" alt="">
                    <!-- End Image -->

                    <!-- Name -->
                    <div class="blog_single_comments_name">
                        Kate Delicate <span>/ 01.10.2018</span>
                    </div>
                    <!-- End Name -->

                    <!-- Text -->
                    <div class="blog_single_comments_text">
                        In nec risus vel turpis facilisis aliquet. Donec eget sollicitudin massa. Ut a tincidunt quam, vitae efficitur arcu. Donec aliquet erat sed est rhoncus, vitae laoreet ante tristique.
                    </div>
                    <!-- End Text -->

                </div>
                <!-- End Item-2 -->

            </div>
            <!-- End Comments -->

            <!-- Leave Comment -->
            <div class="leave_comment">
                <!-- Caption -->
                <div class="blog_single_comments_caption">
                    Leave comment
                </div>
                <!-- End Caption -->

                <!-- Form -->
                <form action="#" class="leave_comment_form">

                    <input type="text" placeholder="Your name">
                    <input type="text" placeholder="E-Mail">
                    <textarea name="#" id="#" cols="40" rows="5" placeholder="Text"></textarea>
                    <input type="submit" value="SEND" class="send">

                </form>
                <!-- End Form -->
            </div>
            <!-- End Leave Comment -->

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

    </div>

</section>
@endsection
