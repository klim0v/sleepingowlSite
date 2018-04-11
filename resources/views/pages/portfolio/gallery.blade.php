@extends('layouts.app')
@section('breadcrumbs', 'Партфолио > ' . $gallery->name)
@section('title', $gallery->title)
@section('content')
    <!-- Description -->
    <section class="portfolio_content">
        <!-- Services -->
        <div class="container-fluid">
            <!-- Items -->
        @foreach($gallery->images as $image)
            <!-- Item-{{$loop->iteration}} -->
                <div class="col-lg-4 col-md-4 col-sm-6">

                    <div class="work_item fluid">
                        <a href="#">
                            <img src="/{{ $image }}" alt="{{ $gallery->title }}">
                        </a>
                    </div>

                </div>
                <!-- End Item-{{$loop->iteration}} -->
        @endforeach
            <!-- End Items -->
        </div>
        <!-- End Services -->

    </section>
    <!-- End Team -->

@endsection