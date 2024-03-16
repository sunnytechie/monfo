<header class="main-header-three main-header sticky-header--three sticky-header sticky-header--one-page">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header-three__logo">
                <a href="/">
                    <img src="{{ asset('assets/images/monfo_write_up.jpg') }}" alt="Cleenhearts HTML" width="156">
                </a>
            </div><!-- /.main-header-three__logo -->
            <div class="main-header__right">
                <div class="main-header__right__left">
                    <nav class="main-header__nav main-menu main-menu--three">
                        <ul class="main-menu__list one-page-scroll-menu">
                            <li class="scrollToLink current"><a @if (Route::current()->getName() == 'welcome') href="#home" @else href="/#home" @endif>Home</a></li>
                            <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#about" @else href="/#about" @endif>About</a></li>
                            <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#program" @else href="/#program" @endif>Programs</a></li>
                            <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#donation" @else href="/#donation" @endif>Donation</a></li>
                            {{-- <li class="scrollToLink"><a href="#testimonial">Testimonial</a></li> --}}
                            <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#event" @else href="/#event" @endif>Events</a></li>
                            <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#faq" @else href="/#faq" @endif>Faq</a></li>
                            <li><a target="_blank" href="https://sfiloveinaction.org/blog/posts/">Blog</a></li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                </div><!-- /.main-header__right__left -->
                <div class="main-header__right__right">
                    <div class="mobile-nav__btn mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.mobile-nav__toggler -->
                    {{-- <div class="main-header__cart">
                        <a href="{{ route('donation') }}" class="main-header__cart__link">
                            <span class="icon-trolley"></span>
                        </a>
                        <span class="main-header__cart__quantity">0</span>
                    </div><!-- /.main-header__cart --> --}}
                    <a href="{{ route('donation') }}" class="cleenhearts-btn main-header__btn">
                        <div class="cleenhearts-btn__icon-box">
                            <div class="cleenhearts-btn__icon-box__inner"><span class="icon-donate"></span></div>
                        </div>
                        <span class="cleenhearts-btn__text">donate now</span>
                    </a><!-- /.thm-btn main-header__btn -->
                    <div class="main-header-three__social">
                        <span class="main-header-three__social__title">Follow us:</span><!-- /.main-header-three__social__title -->
                        <div class="social-link-two">
                            <a href="https://web.facebook.com/love4sfi">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://www.instagram.com/sistersfellowshipinternational/">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            {{-- <a href="https://linkedin.com" aria-hidden="true">
                                <i class="fab fa-linkedin-in"></i>
                                <span class="sr-only">Linkedin</span>
                            </a> --}}
                            <a href="https://www.youtube.com/@sistersfellowshipinternational" aria-hidden="true">
                                <i class="fab fa-youtube"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.footer-two__social -->
                    </div><!-- /.main-header-three__social -->
                </div><!-- /.main-header__right__right -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->
