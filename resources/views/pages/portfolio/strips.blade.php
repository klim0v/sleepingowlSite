@extends('layouts.app')
@section('breadcrumbs', 'Портфолио')
@section('title', 'Портфолио')
@section('content')
    <section class="blog_content blog_2">

        <div class="container">
            <!-- Filter -->
            <div class="filter">
                <ul>
                    @foreach($services as $service)
                        <li><a href="{{ route('portfolio', ['service' => $service->slug]) }}">{{ $service->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- End Filter -->

            @foreach($galleries as $gallery)
            <!-- Item_{{$loop->iteration}} -->
            <div class="col-lg-4 col-md-6">

                <div class="blog_item second">

                    <div class="blog_item_cat">
                        {{ $gallery->service->name }}
                    </div>

                    <!-- Image -->
                    <div class="img_wrap">
                        <a href="{{ route('gallery', $gallery->slug) }}">
                        <img src="/{{ $gallery->cover }}" alt="{{ $gallery->name }}">
                        </a>
                    </div>
                    <!-- End Image -->

                    <!-- Article info -->
                    <div class="article_info">

                        <div class="article_name">

                            <a href="{{ route('gallery', $gallery->slug) }}">{{ $gallery->title }}</a>

                            <div class="article_cat_comment">
                                {{ $gallery->created_at }} / {{count($gallery->images)}} <i class="far fa-image"></i>
                            </div>

                        </div>

                    </div>
                    <!-- End Article info -->

                </div>

            </div>
            <!-- End Item_{{$loop->iteration}} -->
            @endforeach

            <!-- Page navigation -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="page_nav second">
                    {{ $galleries->links() }}
                </div>

            </div>
            <!-- End Page navigation -->

        </div>

    </section>
@endsection
