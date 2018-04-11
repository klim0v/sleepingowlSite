@extends('layouts.app')
@section('meta_description', $gallery->meta_description)
@section('breadcrumbs', 'Партфолио > ' . $gallery->name)
@section('title', $gallery->title)
@section('name', $gallery->name)
@section('content')
    <!-- Description -->
    <section class="portfolio_content">
        <div class="container">
            <!-- What do we do -->
            <div class="col-lg-12">
                <h1 class="section_caption">{{ $gallery->heading }}</h1>

                <div class="services_description">
                    {!! $gallery->description !!}
                </div>
            </div>

        </div>
        <div class="filter"></div>
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