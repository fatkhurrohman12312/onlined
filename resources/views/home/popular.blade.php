    <!-- popular courses section start -->
    <section class="popular">
        <div class="container">
            <div class="popular_header">
                <h2 class="popular_header-title" data-aos="fade-up">Popular courses</h2>
                <p class="popular_header-text" data-aos="fade-down">
                    Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus
                    egestas.
                    Vestibulum purus magna.
                </p>
            </div>
            <ul class="popular_tags courses-tags d-flex flex-wrap align-items-center justify-content-center">
                @foreach ($categories as $item)
                    <li class="list-item" data-aos="fade-left">
                        <a class="tag" href="#">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
            <ul class="popular_list d-md-flex flex-wrap">
                @foreach ($products as $item)
                    <li class="popular_list-card course-card col-12 col-md-6 col-lg-4" data-aos="fade-up">
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

                                <div class="wrapper d-flex flex-column">
                                    <h5 class="top_title">{{ $item->name }}</h5>
                                    <span class="top_author">{{ $item->fkTeacher != null ? $item->fkTeacher->name : '-'}}</span>
                                    <span class="top_details">{{ $item->fkTeacher != null ? $item->fkTeacher->work_hour : '-' }} of Work Hour</span>
                                </div>
                            </div>
                            <div class="pricing">
                                <span class="pricing_price h5">Rp {{ number_format($item->price) }} all course</span>
                            </div>
                            <div class="bottom">
                                <p>{{ $item->description }}</p>
                                <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                    sign up for a course <i class="icon-arrow-right-solid icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <a class="popular_btn btn btn--gradient" href="courses.html">
                <span class="text">Learn more</span>
            </a>
        </div>
    </section>
    <!-- popular courses section end -->
