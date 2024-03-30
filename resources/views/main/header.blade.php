<div class="topbar-one topbar-four">
    <div class="container-fluid">
        <div class="topbar-one__inner">
            <ul class="list-unstyled topbar-one__info">
                <li class="topbar-one__info__item">
                    <span class="topbar-one__info__icon icon-location"></span>
                    4VC5+3W8, Umuoji 434112, Anambra, Nigeria
                </li>
                <li class="topbar-one__info__item">
                    <span class="topbar-one__info__icon icon-phone"></span>
                    <a href="tel:+2348146700148">+234 814 6700 148</a>
                </li>
            </ul><!-- /.list-unstyled topbar-one__info -->
            <div class="topbar-one__right">
                <div class="social-link topbar-one__social">
                    <a href="https://web.facebook.com/love4sfi">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/sistersfellowshipinternational/">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a href="https://www.youtube.com/@sistersfellowshipinternational" aria-hidden="true">
                        <i class="fab fa-youtube"></i>
                        <span class="sr-only">Youtube</span>
                    </a>
                </div><!-- /.topbar-one__social -->
            </div><!-- /.topbar-one__right -->
        </div><!-- /.topbar-one__inner -->
    </div><!-- /.container -->
</div><!-- /.topbar-one -->

<header class="main-header main-header-four sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="/">
                    <img src="{{ asset('assets/images/mmonfo_foundation.png') }}" alt="Cleenhearts HTML" width="161">
                </a>
            </div><!-- /.main-header__logo -->
            <div class="main-header__right">
                <nav class="main-header__nav main-menu main-menu--four">
                    <ul class="main-menu__list one-page-scroll-menu">
                        <li class="scrollToLink @if (Route::current()->getName() == 'welcome') current @endif"><a @if (Route::current()->getName() == 'welcome') href="#home" @else href="/#home" @endif>Home</a></li>
                        <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#about" @else href="/#about" @endif>About</a></li>
                        <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#services" @else href="/#services" @endif>Services</a></li>
                        <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#donation" @else href="/#donation" @endif>Donation</a></li>
                        {{-- <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#testimonials" @else href="/#testimonials" @endif>Testimonials</a></li> --}}
                        <li class="scrollToLink"><a @if (Route::current()->getName() == 'welcome') href="#faq" @else href="/#faq" @endif>Faq</a></li>
                        <li class="scrollToLink"><a target="_blank" @if (Route::current()->getName() == 'welcome') href="https://sfiloveinaction.org/blog/posts/" @else href="https://sfiloveinaction.org/blog/posts/" @endif>Blog</a></li>
                    </ul>
                </nav><!-- /.main-header__nav -->
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                {{-- <a href="#" class="main-header__search search-toggler">
                    <span class="icon-search"></span>
                </a><!-- /.main-header__search -->
                <div class="main-header__cart">
                    <a href="cart.html" class="main-header__cart__link">
                        <span class="icon-trolley"></span>
                    </a>
                </div><!-- /.main-header__cart --> --}}
                <a href="{{ route('volunteer') }}" class="main-header__btn">
                    <span class="icon-donate"></span>
                    Register now
                </a><!-- /.thm-btn main-header__btn -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container -->
</header><!-- /.main-header -->
