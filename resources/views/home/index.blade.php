@extends('layouts.app')

@section('title', 'Home | Onlined')

@section('styles')
    <link rel="stylesheet" href="{{ asset('template/edison/css/index.min.css') }}" />
@endsection

@section('content')
    <!-- hero section start -->
    <div class="underlay"></div>
    <section class="hero">
        <div class="container d-lg-flex align-items-center">
            <div class="hero_content">
                <h1 class="hero_content-header" data-aos="fade-up">Large educational programs</h1>
                <div class="hero_content-rating d-flex flex-column flex-sm-row align-items-center">
                    <p class="text" data-aos="fade-left">Our course is rated excellent by over 42,000 people</p>
                    <div class="wrapper" data-aos="fade-left" data-aos-delay="50">
                        <ul class="rating d-flex align-items-center">
                            <li class="rating_star">
                                <i class="icon-star icon"></i>
                            </li>
                            <li class="rating_star">
                                <i class="icon-star icon"></i>
                            </li>
                            <li class="rating_star">
                                <i class="icon-star icon"></i>
                            </li>
                            <li class="rating_star">
                                <i class="icon-star icon"></i>
                            </li>
                            <li class="rating_star">
                                <i class="icon-star icon"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="hero_content-text" data-aos="fade-up" data-aos-delay="50">
                    Today, more than 48,000 people have already studied at our university in various fields:
                    programming,
                    photography, marketing and management
                </p>
                {{-- <div class="hero_content-action d-flex flex-wrap">
                    <a class="btn btn--gradient" href="#" data-aos="fade-left">
                        <span class="text">Try for Free</span>
                    </a>
                    <a class="btn btn--highlight" href="pricing.html" data-aos="fade-left" data-aos-delay="50">
                        <span class="text">See Pricing Plans</span>
                    </a>
                </div> --}}
            </div>
            <div class="hero_media col-lg-6">
                <lottie-player src="lottie/hero.json" background="transparent" speed="1"
                    style="width: 100%; height: 100%" loop autoplay></lottie-player>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    @include('home.features')
    @include('home.promo')
    @include('home.about')
    @include('home.popular')
    @include('home.banner')
@endsection
