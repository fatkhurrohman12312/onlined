    <!-- about section start -->
    <section class="about">
        <div class="container">
            <div class="about_deco">
                <lottie-player src="lottie/wave.json" background="transparent" speed="1"
                    style="width: 100%; height: 100%" loop autoplay></lottie-player>
            </div>
            <div class="about_main">
                <div class="content">
                    <h2 class="about_main-header" data-aos="fade-in">How does it work?</h2>
                    <ul class="about_main-list">
                        <li class="about_main-list_item" data-aos="fade-up">
                            <i class="icon-check icon"></i>
                            <div class="content">
                                <h5 class="title">4 on-line lectures with a teacher</h5>
                                <p class="text">Quisque eget porta mauris. Praesent eu tincidunt nulla, suscipit
                                    lobortis est.</p>
                            </div>
                        </li>
                        <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="50">
                            <i class="icon-check icon"></i>
                            <div class="content">
                                <h5 class="title">Subscription gives access to education materials and videos</h5>
                                <p class="text">Quisque eget porta mauris. Praesent eu tincidunt nulla, suscipit
                                    lobortis est.</p>
                            </div>
                        </li>
                        <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="100">
                            <i class="icon-check icon"></i>
                            <div class="content">
                                <h5 class="title">
                                    After completing the course and completing the tasks, you will receive a
                                    certificate
                                </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="about_review" data-aos="zoom-in">
                <div class="about_review-wrapper">
                    @if ($teacher->photo != null)
                        {{-- <img src="{{ asset('storage/' . $teacher->photo) }}" class="img-thumbnail" alt="..."> --}}
                        <div class="media">
                            <picture>
                                <source data-srcset="{{ asset('storage/' . $teacher->photo) }}" srcset="{{ asset('storage/' . $teacher->photo) }}" />
                                <img class="lazy" data-src="{{ asset('storage/' . $teacher->photo) }}" src="{{ asset('storage/' . $teacher->photo) }}"
                                    alt="media" />
                            </picture>
                        </div>
                    @else
                        <span class="top_icon top_icon--blue">
                            <i class="icon-code-solid icon"></i>
                        </span>
                    @endif
                    <div class="main">
                        <h5 class="main_name">{{ $teacher->name }}</h5>
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
                        <q class="main_review quote">
                            “{{ $teacher->description }}”
                        </q>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
