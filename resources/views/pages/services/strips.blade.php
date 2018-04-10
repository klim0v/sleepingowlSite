@extends('layouts.app')
@section('breadcrumbs', 'Услуги')
@section('title', 'Услуги')
@section('content')
<!-- Description -->
<section class="services_content">

    <div class="container">
        <!-- What do we do -->
        <div class="col-lg-12">

            <h1 class="section_caption">Наши рекламные слуги</h1>

            <div class="services_description">
                Ut nec lorem elit. Aenean rutrum bibendum consectetur. Curabitur tristique consectetur tempus. Aenean ultricies vulputate nunc sit amet vulputate. Vestibulum eu diam lacinia, sodales mauris a, maximus diam. Sed lacinia tempus neque, vel aliquet purus vulputate nec. Maecenas malesuada semper dolor, vitae ullamcorper quam scelerisque ut. Nullam felis diam, aliquam et fermentum vel, ultricies eget magna.
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

                        <img src="/{{ $service->icon }}" alt="{{ $service->title }}">

                        <div class="service_item_caption">{{ $service->title }}</div>

                        <div class="service_item_description">
                            {{ $service->annotation }}
                        </div>

                        <div class="button loadmore service_item">

                            <a href="{{ route('single_services', [ $service->slug]) }}"><span>Подробнее</span></a>

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