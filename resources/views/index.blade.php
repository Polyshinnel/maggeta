@extends('layouts.layout')

@section('title', $page_info['title'])
@section('description', $page_info['description'])

@section('content')
    <main>
        <section class="banner">
            <div class="box-container">
                <h1>Maggeta<br>Simple solution</h1>
            </div>
        </section>


        <div class="box-container">
            <div class="about-block base-block" id="about">
                <h2>About us</h2>
                <div class="about-block__line">
                    <section class="info">
                        <h3>Who we are?</h3>
                        <p>Maggeta is a company of experts based in Dubai with many years of experience in leading
                            international market sectors.</p>
                        <p>Unique approaches for each client make even the most complex tasks available today.</p>
                        <p>You will get experts in project management, financial and legal process optimisation, digital
                            advertising and many other professional services by contacting us.</p>
                    </section>
                </div>

            </div>
            <!--/about-block-->

            <div class="why-we base-block">
                <h2>Why is it worth<br>working with us?</h2>

                <div class="why-we__wrapper">
                    <div class="why-we__item">
                        <h3>Reliability</h3>
                        <p>We only take on tasks. That we can promise results</p>
                    </div>

                    <div class="why-we__item">
                        <h3>Safeguards</h3>
                        <p>No payment in advance. only for results or, in exceptional cases, 50/50.</p>
                    </div>

                    <div class="why-we__item">
                        <h3>Expertise</h3>
                        <p>A team of experts with 10 to 20 years of experience</p>
                    </div>

                    <div class="why-we__item">
                        <h3>Qualification</h3>
                        <p>Experts who had positions as middle and top managers in international companies.</p>
                    </div>
                </div>
            </div>
            <!-- /.why-we -->

            <div class="services-block" id="services" itemscope itemtype="https://schema.org/WebSite">
                <a href="/consulting" class="services-block__link" itemprop="url">
                    <div class="services-block__item">
                        <img src="{{asset('assets/img/consult-main.webp')}}" alt="">
                        <div class="services-block__item-wrapper">
                            <p itemprop="name">Management Consulting</p>
                        </div>
                    </div>
                </a>
                <!--/.services-block__link-->

                <a href="/advertising" class="services-block__link" itemprop="url">
                    <div class="services-block__item">
                        <img src="{{asset('assets/img/adv-main.webp')}}" alt="">
                        <div class="services-block__item-wrapper">
                            <p itemprop="name">Digital Advertising</p>
                        </div>
                    </div>
                </a>
                <!--/.services-block__link-->
            </div>
            <!-- /.services-block -->

            @include('components.contacts')
        </div>
    </main>
@endsection
