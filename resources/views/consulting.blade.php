@extends('layouts.layout-serv')

@section('title', $page_info['title'])
@section('description', $page_info['description'])

@section('content')
    <main>
        <section class="banner banner_mod">
            <div class="box-container">
                <h1>Consulting<br>
                    YOUR BUSINESS - our Business</h1>
            </div>
        </section>

        <div class="box-container">
            <div class="about-block base-block" id="about">
                <h2>About Service</h2>
                <div class="about-block__line">
                    <section class="info">
                        <h3>Management consulting</h3>
                        <p>We provide administrative consulting services, such as preparing various documents,
                            resolutions, and minutes of meetings.</p>
                        <p>We advise the company's management to reduce costs, analyse existing organisational problems
                            and restructure the company, including improving its efficiency by all necessary
                            indicators.</p>
                    </section>

                </div>

            </div>
            <!--/about-block-->


            @if($services)
                <section class="service-page-blocks" itemprop="hasOfferCatalog" itemscope
                         itemtype="https://schema.org/OfferCatalog">
                    @foreach($services as $service)
                        @if($service['type'] == 'not even')
                            <div class="service-page-block__item" itemprop="itemListElement" itemscope
                                 itemtype="https://schema.org/OfferCatalog">
                                <div class="service-page-block__img">
                                    <img src="{{$service['img']}}" alt="">
                                </div>
                                <div class="service-page-block__text">
                                    <p itemprop="name">{{$service['name']}}</p>
                                    <button class="recall-btn-serv">Consult</button>
                                </div>
                            </div>
                            <!-- /.service-page-block__item -->
                        @else
                            <div class="service-page-block__item service-page-block__item_reverse"
                                 itemprop="itemListElement" itemscope itemtype="https://schema.org/OfferCatalog">
                                <div class="service-page-block__img">
                                    <img src="{{$service['img']}}" alt="">
                                </div>
                                <div class="service-page-block__text">
                                    <p itemprop="name">{{$service['name']}}</p>
                                    <button class="recall-btn-serv">Consult</button>
                                </div>
                            </div>
                            <!-- /.service-page-block__item -->
                        @endif
                    @endforeach
                </section>
                <!-- /.service-page-blocks -->
            @endif


            @include('components.contacts')
        </div>

    </main>
@endsection
