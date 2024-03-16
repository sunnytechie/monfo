@extends('layouts.app')
@section('content')

<section class="become-volunteer section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="become-volunteer__image">
                    <div class="become-volunteer__image__inner">
                        <img src="assets/images/become-volunteer/become-volunteer-1-1.png" alt="become-volunteer">
                    </div><!-- /.become-volunteer__image__inner -->
                </div><!-- /.become-volunteer__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                <form action="#" class="become-volunteer__form form-one">
                    <div class="become-volunteer__form__bg" style="background-image: url('assets/images/backgrounds/become-volunteer-bg-1-1.png');"></div><!-- /.become-volunteer__form__bg -->
                    <h3 class="become-volunteer__form__title">Let’s join our community</h3><!-- /.become-volunteer__form__title -->
                    <div class="become-volunteer__form__inner">
                        <div class="form-one__control">
                            <input type="text" name="name" id="name" placeholder="enter your Name" class="form-one__control__input">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="email" name="email" id="email" placeholder="email address" class="form-one__control__input">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="tel" name="tel" id="tel" placeholder="enter phone no" class="form-one__control__input">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <input type="text" name="date" placeholder="Select date" id="datepicker" class="form-one__control__input cleenhearts-datepicker">
                        </div><!-- /.form-one__control -->
                        <div class="form-one__control">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="write message . . ." class="form-one__control__input form-one__control__message"></textarea>
                        </div><!-- /.form-one__control -->
                        <div class="become-volunteer__form__bottom form-one__control">
                            <button type="submit" class="cleenhearts-btn cleenhearts-btn--border-base">
                                <span class="cleenhearts-btn__icon-box">
                                    <span class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></span>
                                </span>
                                <span class="cleenhearts-btn__text">send message</span>
                            </button>
                            <div class="volunteer-group">
                                <a href="volunteer-details.html" class="volunteer-group__link">
                                    <img src="assets/images/volunteer/volunteer-image-1.png" alt="volunteer" class="volunteer-group__image">
                                </a><!-- /.volunteer-group__link -->
                                <a href="volunteer-details.html" class="volunteer-group__link">
                                    <img src="assets/images/volunteer/volunteer-image-2.png" alt="volunteer" class="volunteer-group__image">
                                </a><!-- /.volunteer-group__link -->
                                <a href="volunteer-details.html" class="volunteer-group__link">
                                    <img src="assets/images/volunteer/volunteer-image-3.png" alt="volunteer" class="volunteer-group__image">
                                </a><!-- /.volunteer-group__link -->
                            </div><!-- /.volunteer-group -->
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

                        <h6 class="sec-title__tagline @@extraClassName">WE ARE WORLDWIDE</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">We Are <span class="sec-title__title__inner">Serving</span> Everywhere</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="worldwide-one__text">We help companies develop powerful corporate social responsibility, grantmaking, and employee engagement strategies.</p><!-- /.worldwide-one__text -->
                    <div class="row gutter-y-30">
                        <div class="col-md-6">
                            <div class="worldwide-one__inner">
                                <div class="worldwide-one__inner__icon">
                                    <span class="icon-team"></span>
                                </div><!-- /.worldwide-one__inner__icon -->
                                <div class="worldwide-one__inner__content">
                                    <h4 class="worldwide-one__inner__title">join our team</h4>
                                    <p class="worldwide-one__inner__text">6,472</p>
                                </div><!-- /.worldwide-one__inner__content -->
                            </div><!-- /.worldwide-one__inner -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="worldwide-one__inner">
                                <div class="worldwide-one__inner__icon">
                                    <span class="icon-donation"></span>
                                </div><!-- /.worldwide-one__inner__icon -->
                                <div class="worldwide-one__inner__content">
                                    <h4 class="worldwide-one__inner__title">donate now</h4>
                                    <p class="worldwide-one__inner__text">$38,768</p>
                                </div><!-- /.worldwide-one__inner__content -->
                            </div><!-- /.worldwide-one__inner -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                    <div class="worldwide-one__bottom">
                        <a href="become-a-volunteer.html" class="cleenhearts-btn cleenhearts-btn--border">
                            <div class="cleenhearts-btn__icon-box">
                                <div class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></div>
                            </div>
                            <span class="cleenhearts-btn__text">Become A Volunteer</span>
                        </a>
                        <div class="volunteer-group">
                            <a href="volunteer-details.html" class="volunteer-group__link">
                                <img src="assets/images/volunteer/volunteer-image-1.png" alt="volunteer" class="volunteer-group__image">
                            </a><!-- /.volunteer-group__link -->
                            <a href="volunteer-details.html" class="volunteer-group__link">
                                <img src="assets/images/volunteer/volunteer-image-2.png" alt="volunteer" class="volunteer-group__image">
                            </a><!-- /.volunteer-group__link -->
                            <a href="volunteer-details.html" class="volunteer-group__link">
                                <img src="assets/images/volunteer/volunteer-image-3.png" alt="volunteer" class="volunteer-group__image">
                            </a><!-- /.volunteer-group__link -->
                        </div><!-- /.volunteer-group -->
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
                                    <span>View Map</span>
                                    <i class="icon-paper-plane"></i>
                                </a>
                            </div><!-- /.worldwide-one__location__content -->
                        </div><!-- /.worldwide-one__location__popup -->
                    </div><!-- /.worldwide-one__location -->
                    <div class="worldwide-one__location worldwide-one__location--four">
                        <button type="button" class="worldwide-one__location__btn">
                            <span class="worldwide-one__location__btn__box"></span>
                        </button><!-- /.worldwide-one__location__btn -->
                        <div class="worldwide-one__location__popup">
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
                            <div class="worldwide-one__location__image">
                                <img src="assets/images/worldwide/worldwide-1-1.jpg" alt="worldwide">
                            </div><!-- /.worldwide-one__location__image -->
                            <div class="worldwide-one__location__content">
                                <p class="worldwide-one__location__text">african refugee crises food & health program</p>
                                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu" class="worldwide-one__location__map">
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
