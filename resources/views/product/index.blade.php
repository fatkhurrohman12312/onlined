@extends('layouts.app')

@section('title', 'Product | Onlined')

@section('styles')
    <link rel="stylesheet" href="{{ asset('template/edison/css/courses.min.css') }}" />
@endsection

@section('header')
    <header class="page">
        <div class="page_breadcrumbs">
            <div class="container">
                <ul class="page_breadcrumbs-list d-flex flex-wrap align-items-center">
                    <li class="list-item">
                        <a href="index.html" class="link">Home</a>
                    </li>

                    <li class="list-item">All courses</li>
                </ul>
            </div>
        </div>

        <div class="page_main">
            <div class="underlay"></div>
            <div class="container">
                <div class="content-wrapper">
                    <h1 class="page_main-header">Large selection of courses</h1>
                    <p class="page_main-text">
                        Donec accumsan, dolor ac malesuada rhoncus, leo arcu pellentesque dolor, nec tristique diam neque
                        vitae sem.
                        Nulla a lectus sollicitudin, volutpat lacus id, eleifend ipsum.
                    </p>

                    <form class="page_main-form" action="#" method="post" data-type="search">
                        <i class="icon-search-solid icon"></i>
                        <input class="field required" type="search" placeholder="Search for…" />
                    </form>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <!-- courses list section start -->
    <section class="list">
        <div class="container">
            <ul class="list_tags courses-tags d-flex flex-wrap align-items-center justify-content-center">
                <li class="list-item" data-aos="fade-left">
                    <a data-target="all" class="list_tags-tag tag current" href="#">all</a>
                </li>
                @foreach ($categories as $item)
                    <li class="list-item" data-aos="fade-left" data-aos-delay="50">
                        <a data-target="programming" class="list_tags-tag tag" href="#">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="list_courses d-md-flex flex-wrap">
                @foreach ($products as $item)
                    <li class="list_courses-card course-card col-12 col-md-6 col-xl-4"
                        data-groups='["gamedev", "programming"]'>
                        <div class="course-card_wrapper">
                            <div>
                                @if ($item->photo != null)
                                    <img src="{{ asset('storage/' . $item->photo) }}" class="img-thumbnail"
                                        alt="...">
                                @else
                                    <span class="top_icon top_icon--blue">
                                        <i class="icon-code-solid icon"></i>
                                    </span>
                                @endif
                            </div>
                            <div class="top d-flex align-items-start">
                                <span class="top_icon top_icon--blue">
                                    <i class="icon-code-solid icon"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <h5 class="top_title">{{ $item->name }}</h5>
                                    <span
                                        class="top_author">{{ $item->fkTeacher != null ? $item->fkTeacher->name : '-' }}</span>
                                    <span
                                        class="top_details">{{ $item->fkTeacher != null ? $item->fkTeacher->work_hour : '-' }}
                                        of Work Hour</span>
                                </div>
                            </div>
                            <div class="pricing">
                                <span class="pricing_price h5">Rp {{ number_format($item->price) }} all course</span>
                            </div>
                            <div class="bottom">
                                <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                    Read More <i class="icon-arrow-right-solid icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="sale">
      <div class="sale_deco">
          <picture>
              <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
              <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
          </picture>
      </div>
      <div class="container">
          <div class="sale_content">
              <div class="content d-flex flex-column flex-sm-row align-items-center align-items-sm-start">
                  <span class="content_percent">50%</span>
                  <div class="content_text d-flex flex-column align-items-center align-items-sm-start">
                      <h3 class="title"><span class="percent">50%</span> Season sale</h3>
                      <p class="text">Unlimited access to educational materials and lectures</p>
                  </div>
              </div>
              <form class="form d-flex flex-column flex-sm-row" action="#" method="post" data-type="subscription">
                  <input class="field required" type="text" placeholder="Subscribe by e-mail" />
                  <button class="btn btn--gradient" type="submit">
                      <span class="text">Get Started Now</span>
                  </button>
              </form>
          </div>
      </div>
  </section>
  <!-- sale section end -->
@endsection

@section('js')
    <script src="{{ asset('template/edison/js/reviews.min.js') }}"></script>
    <script src="{{ asset('template/edison/js/courses.min.js') }}"></script>
@endsection
