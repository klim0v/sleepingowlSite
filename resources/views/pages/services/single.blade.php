@extends('layouts.app')

@section('breadcrumbs', 'Услуги > ' . optional($service->parent)->title . ' > ' . $service->title)
@section('title', $service->title)
@section('content')
<!-- Description -->
<section class="services_content">
    <!-- Services -->
    <div class="container">

        <div class="col-lg-6">
            <!-- Caption -->
            <div class="single_service_caption">
                {{ $service->title }}
            </div>
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