@extends('layouts.app')
@section('breadcrumbs', $page->name)
@section('title', $page->name)
@section('meta_description', $page->meta_description)
@section('name', $page->name)
@section('content')
<!-- Description -->
<section class="services_content">

    <div class="container">
        <!-- What do we do -->
        <div class="col-lg-12">

            <h1 class="section_caption">{{ $page->heading }}</h1>

            <div class="services_description">
                {!! $page->description !!}
            </div>

            <div class="button loadmore works col-lg-12 col-md-12">

                <a href="{{ route('portfolio') }}"><span>Наши работы</span></a>

            </div>

        </div>
        <!-- End What do we do -->
    </div>
    <!-- Services -->


    <div class="container-fluid wrap_services">
        @foreach($services as $service)
            <!-- Item_{{$loop->iteration}} -->
            <div class="row">

                <div class="col-lg-6 col-md-6 service_image col-sm-12 col-xs-12 @if ( $loop->iteration % 2 === 0 ) col-md-push-6 @endif" style="background-image: url('{{ $service->cover }}');"></div>

                <div class="col-lg-6 col-md-6 service_item_wrap col-sm-12 col-xs-12 @if ( $loop->iteration % 2 === 0 ) col-md-pull-6 @endif">

                    <div class="service_item_page">
                        <a href="{{ route('single_services', ['slug' => $service->slug ]) }}">
                        <img src="/{{ $service->icon }}" alt="{{ $service->title }}">
                        </a>
                        <div class="service_item_caption">
                            <a href="{{ route('single_services', ['slug' => $service->slug ]) }}">
                            {{ $service->title }}
                            </a>
                        </div>

                        <div class="service_item_description">
                            {{ $service->annotation }}
                        </div>

                    </div>

                </div>
            </div>
            <!-- End Item_{{$loop->iteration}} -->
        @endforeach
    </div>
    <!-- End Services -->

    <div class="container">
        <!-- Question form -->
        @component('components.question_form')
        @endcomponent
        <!-- End Question form -->
    </div>

</section>
<!-- End Team -->
@endsection