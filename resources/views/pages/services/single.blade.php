@extends('layouts.app')
@section('meta_description', $service->meta_description)
@section('breadcrumbs', 'Услуги > ' . optional($service->parent)->name . ' > ' . $service->name)
@section('title', $service->title)
@section('name', $service->name)
@section('content')
<!-- Description -->
<section class="services_content">
    <!-- Services -->
    <div class="container">
        <h1 class="section_caption">{{ $service->heading }}</h1>
        <div class="filter"></div>
        <div class="col-lg-6">
            <!-- Caption -->
            {{--<div class="single_service_caption">--}}
                {{--{{ $service->title }}--}}
            {{--</div>--}}
            <!-- End caption -->

            <!-- Desription -->
            <div class="single_service_description">
                {!! $service->description !!}
            </div>
            <!-- End Description -->
        </div>

        <div class="col-lg-6">
            <!-- Image -->
            <div class="single_service_image">
                <img src="/{{ $service->cover }}" alt="">
            </div>
            <!-- End Image -->
        </div>

        <!-- Question form -->
        @component('components.question_form')
        @endcomponent
        <!-- End Question form -->

    </div>
    <!-- End Services -->
</section>
<!-- End Team -->
@endsection