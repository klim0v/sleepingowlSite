@extends('layouts.app')

@section('title', $service->title)
@section('breadcrumbs', 'Услуги > ' . $service->title)

@section('content')
    <!-- Description -->
    <section class="services_content">
        <!-- Services -->
        <div class="container">
            @foreach($service->children as $child)
            <!-- Item_{{$loop->iteration}} -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="service_item_page second_service">

                    <img src="/{{ $child->icon }}" alt="">

                    <div class="service_item_caption">{{ $child->title }}</div>

                    <div class="service_item_description second_service">
                        {{ $child->annotation }}
                    </div>

                    <div class="button loadmore service_item">

                        <a href="{{ route('single_services', ['slug' => $service->slug, 'slug2' => $child->slug ]) }}"><span>Подробнее</span></a>

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
    @component('components.questions')
    @endcomponent
    <!-- End Frequently asked questions -->
@endsection