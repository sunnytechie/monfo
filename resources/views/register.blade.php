@extends('layouts.app')
@section('content')
<style>
    .become-volunteer__image__inner img {
        height: 764px;
        width: 472px;
        object-fit: cover;

    }
</style>

<section class="become-volunteer section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="become-volunteer__image">
                    <div class="become-volunteer__image__inner">
                        <img src="{{ asset('assets/images/meeting-4784909_640.jpg') }}" alt="become-volunteer">
                    </div><!-- /.become-volunteer__image__inner -->
                </div><!-- /.become-volunteer__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                <form action="{{ route('training.register') }}" method="POST" class="become-volunteer__form form-one">
                    @csrf

                    <div class="become-volunteer__form__bg" style="background-image: url('assets/images/backgrounds/become-volunteer-bg-1-1.png');"></div><!-- /.become-volunteer__form__bg -->
                    <h3 class="become-volunteer__form__title">Register to join.</h3><!-- /.become-volunteer__form__title -->

                    <div class="become-volunteer__form__inner">

                        <div class="form-one__control">
                            <input type="text" name="name" id="name" placeholder="enter your Name" class="form-one__control__input">
                        </div><!-- /.form-one__control -->

                        <div class="form-one__control">
                            <input type="email" name="email" id="email" placeholder="email address" class="form-one__control__input">
                        </div><!-- /.form-one__control -->

                        <div class="form-one__control">
                            <input type="tel" name="phone" id="tel" placeholder="enter phone no" class="form-one__control__input">
                        </div><!-- /.form-one__control -->

                        <div class="form-one__control">
                            <input type="text" name="address" id="address" placeholder="enter your address" class="form-one__control__input">
                        </div><!-- /.form-one__control -->

                        @php
                            $courses = [
                                '1' => 'Creative Art & Design',
                                '2' => 'Information Technology',
                                '3' => 'Catering',
                                '4' => 'Food Processing',
                                '5' => 'Health & Wellness',
                                '6' => 'Financial Literacy',
                                '7' => 'Relationships',
                                '8' => 'Parenting',
                                '9' => 'Mental Health',
                                '10' => 'Business Strategies',
                                '11' => 'Cosmetology',
                                '12' => 'Fashion Design',
                                '13' => 'Agriculture',
                                '14' => 'Photography',
                                '15' => 'Music',
                                '16' => 'Dance',
                                '17' => 'Film Making',
                                '18' => 'Acting',
                                '19' => 'Public Speaking',
                                '20' => 'Dietary Consultancy',
                            ];
                        @endphp

                        <div class="form-one__control">
                            <select name="course" id="course" class="form-one__control__input">
                                <option value="">Select Course</option>
                                @foreach ($courses as $key => $course)
                                    <option value="{{ $key }}">{{ $course }}</option>
                                @endforeach
                            </select>
                        </div><!-- /.form-one__control -->


                        <div class="become-volunteer__form__bottom form-one__control">
                            <button type="submit" class="cleenhearts-btn cleenhearts-btn--border-base">
                                <span class="cleenhearts-btn__icon-box">
                                    <span class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></span>
                                </span>
                                <span class="cleenhearts-btn__text">Submit</span>
                            </button>
                        </div><!-- /.become-volunteer__form__bottom -->


                    </div><!-- /.become-volunteer__form__inner -->
                </form><!-- /.become-volunteer__form -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.become-volunteer section-space -->

<section class="worldwide-one @@extraClassName section-space">
    <div class="worldwide-one__bg" style="background-image: url('assets/images/backgrounds/worldwide-bg-1-1.png');"></div><!-- /.worldwide-one__bg -->
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-xl-6">
                <div class="worldwide-one__content">
                    <div class="sec-title">

                        <h6 class="sec-title__tagline @@extraClassName">Service to humanity</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">We Are <span class="sec-title__title__inner">Serving</span> Everywhere</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->

                    <p class="worldwide-one__text">We empower women to acquire skills necessary to make them relevant in the society.</p><!-- /.worldwide-one__text -->

                    <div class="row gutter-y-30">
                        <div class="col-md-6">
                            <div class="worldwide-one__inner">
                                <div class="worldwide-one__inner__icon">
                                    <span class="icon-team"></span>
                                </div><!-- /.worldwide-one__inner__icon -->
                                <div class="worldwide-one__inner__content">
                                    <h4 class="worldwide-one__inner__title">join us</h4>
                                    <p class="worldwide-one__inner__text">1000 +</p>
                                </div><!-- /.worldwide-one__inner__content -->
                            </div><!-- /.worldwide-one__inner -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="worldwide-one__inner">
                                <div class="worldwide-one__inner__icon">
                                    <span class="icon-donation"></span>
                                </div><!-- /.worldwide-one__inner__icon -->
                                <div class="worldwide-one__inner__content">
                                    <h4 class="worldwide-one__inner__title">Support us</h4>
                                    <p class="worldwide-one__inner__text">---</p>
                                </div><!-- /.worldwide-one__inner__content -->
                            </div><!-- /.worldwide-one__inner -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="worldwide-one__bottom">
                        <a href="/#donation" class="cleenhearts-btn cleenhearts-btn--border">
                            <div class="cleenhearts-btn__icon-box">
                                <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                            </div>
                            <span class="cleenhearts-btn__text">Support</span>
                        </a>
                    </div><!-- /.worldwide-one__bottom -->

                </div><!-- /.worldwide-one__content -->
            </div><!-- /.col-xl-6 -->

            <div class="col-xl-6">
                <div class="worldwide-one__right">
                    <div class="worldwide-one__location worldwide-one__location--one">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Jesus Transformation Camp</p>
                                <a href="#" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--two">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Lagos Area</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--three">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Port Harcourt Area</p>
                                {{-- <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a> --}}
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--four">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Enugu Area</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--five">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Aba City</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--six">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Awka city</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--seven">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International UK</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--eight">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International US</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--nine">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            {{-- <div class="worldwide-one__location__image"> --}}
                                {{-- <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide"> --}}
                            {{-- </div><!-- /.worldwide-one__location__image --> --}}
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">Sisters' Fellowship International Ghana</p>
                                <a target="_blank" href="https://maps.app.goo.gl/uBQPWj2p8txTzZSh8" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                </div><!-- /.worldwide-one__right -->
            </div><!-- /.col-xl-6 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
    <img src="assets/images/resources/worldwide-hand.png" alt="worldwide-hand" class="worldwide-one__hand">
</section><!-- /.worldwide-one section-space -->

@endsection
