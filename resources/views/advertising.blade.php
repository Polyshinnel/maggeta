@extends('layouts.layout-serv')

@section('title', $page_info['title'])
@section('description', $page_info['description'])

@section('content')
    <main>
        <section class="banner banner_mod">
            <div class="box-container">
                <h1>advertisement<br>
                    Fame is forged here</h1>
            </div>
        </section>

        <div class="box-container">
            <div class="about-block base-block" id="about">
                <h2>About Service</h2>
                <div class="about-block__line">
                    <section class="info">
                        <h3>Digital Advertising</h3>
                        <p>We assist and advise start-up and mid-sized organisations on advertising.</p>
                        <p>We offer expertise and advice on creating advertising campaigns and properly marketing your
                            product to achieve your goals and reach your target audience.</p>
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
    </main>
@endsection
