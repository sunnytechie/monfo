<style>
    .main-slider-four__image img {
        height: 485px;
        width: auto;
        object-fit: cover;
    }

    @media (min-width: 500px) {
        .only-mobile {
            display: none;
        }
    }

    @media (max-width: 500px) {
        .hide-from-mobile {
            display: none;
        }
    }
</style>
<section class="main-slider-four" id="home">
    <div class="container-fluid">
        <div class="main-slider-four__carousel cleenhearts-owl__carousel cleenhearts-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "loop": true,
                    "autoWidth": true,
                    "smartSpeed": 700,
                    "nav": false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "dots": false,
                    "autoplay": true
                }'>
            <div class="item">
                <div class="main-slider-four__image">
                    <img src="{{ asset('assets/images/foundation/slide0.jpg') }}" alt="slider">
                </div><!-- /.main-slider-four__image -->
            </div><!-- /.item -->
            <div class="item">
                <div class="main-slider-four__image">
                    <img src="{{ asset('assets/images/foundation/slide2.jpg') }}" alt="slider">
                </div><!-- /.main-slider-four__image -->
            </div><!-- /.item -->
            <div class="item">
                <div class="main-slider-four__image">
                    <img src="{{ asset('assets/images/foundation/slide3.jpg') }}" alt="slider">
                </div><!-- /.main-slider-four__image -->
            </div><!-- /.item -->
            <div class="item">
                <div class="main-slider-four__image">
                    <img src="{{ asset('assets/images/foundation/slide4.jpg') }}" alt="slider">
                </div><!-- /.main-slider-four__image -->
            </div><!-- /.item -->
        </div><!-- /.main-slider-four__carousel -->
    </div><!-- /.container-fluid -->
    <div class="container-fluid main-slider-four__container">
        <div class="main-slider-four__content">
            <div class="main-slider-four__content__left">
                <p class="main-slider-four__sub-title">Mommy Nches Foundation.</p>
                <!-- /.main-slider-four__sub-title -->
                <h2 class="main-slider-four__title">Join Our Exceptional League of Women And Grow Your Reach</h2>
                <!-- /.main-slider-four__title -->
                <div class="main-slider-four__content__inner">
                    <p class="main-slider-four__text">We desire and encourage this generation to be self employed, increased source of income among our youth and eradicate poverty in our society.</p><!-- /.main-slider-four__text -->
                    <a href="{{ route('training') }}" class="main-slider-four__btn hide-from-mobile">
                        <span class="cleenhearts-one-icon-up-right-arrow"></span>
                    </a><!-- /.main-slider-four__btn -->
                </div><!-- /.main-slider-four__content__inner -->
                <div class="only-mobile mt-4">
                    <a href="{{ route('training') }}" class="cleenhearts-btn-two">
                        <span class="icon-donate"></span>
                        Register now
                    </a><!-- /.thm-btn main-header__btn -->
                </div>
            </div><!-- /.main-slider-four__content__left -->
            <a href="https://www.youtube.com/watch?v=BWCQIe0UeCc" class="main-slider-four__circle-text circle-text video-popup">
                <span class="circle-text__logo cleenhearts-one-icon-play"></span>
                <!-- /.circle-text__logo -->
                <div class="circle-text__curved-circle curved-circle">
                    <!-- curved-circle start-->
                    <div class="circle-text__curved-circle__item curved-circle__item" data-circle-text-options='{
            "radius": 98,
            "forceWidth": true,
            "forceHeight": true}'>
                        MONFO: I CAN MAKE IT. I CAN.
                    </div>
                </div><!-- curved-circle end-->
            </a><!-- /.circle-text -->
        </div><!-- /.main-slider-four__content -->
    </div><!-- /.container-fluid main-slider-four__container -->
</section><!-- /.main-slider-four -->
