@extends('layouts.app')
@section('meta_description', $service->meta_description)
@section('title', $service->title)
@section('breadcrumbs', 'Услуги > ' . $service->name)
@section('name', $service->name)
@section('content')
    <!-- Description -->
    <section class="services_content">
        <!-- Services -->
        <div class="container">
            <h1 class="section_caption">{{ $service->heading }}</h1>
            <div class="filter"></div>
            <div class="single_service_description">
                {!! $service->description !!}
            </div>
            <div class="filter"></div>
            @foreach($service->children as $child)
            <!-- Item_{{$loop->iteration}} -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="service_item_page second_service">
                    <a href="{{ route('single_service', ['slug' => $service->slug, 'slug2' => $child->slug ]) }}">
                    <img src="/{{ $child->icon }}" alt="">
                    </a>

                    <div class="service_item_caption">
                        <a href="{{ route('single_service', ['slug' => $service->slug, 'slug2' => $child->slug ]) }}">
                        {{ $child->title }}
                        </a>
                    </div>

                    <div class="service_item_description second_service">
                        {{ $child->annotation }}
                    </div>

                    <div class="button loadmore service_item">

                        {{--<span>{{ __('my.read_more') }}</span></a>--}}

                    </div>

                </div>

            </div>
            <!-- End Item_{{$loop->iteration}} -->
            @endforeach
        </div>
        <!-- End Services -->

    </section>
    <!-- End Team -->

    <!-- Frequently asked questions -->
    <section class="questions no-padding">

        <div class="container">
    @component('components.question_form')
    @endcomponent
        </div>
    </section>
    <!-- End Frequently asked questions -->
@endsection