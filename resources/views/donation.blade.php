@extends('layouts.app')
@section('content')

{{-- <section class="page-header @@extraClassName">
    <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.jpg');"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Donate Now</h2>
        <ul class="cleenhearts-breadcrumb list-unstyled">
            <li><i class="icon-home"></i> <a href="index.html">Home</a></li>
            <li><span>Donate Now</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header --> --}}

<section class="donate-page section-space pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="donate-page__content">
                    <div class="donate-page__notice">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h5 class="donate-page__notice__text">Notice: <span>Test mode is enabled. While in test mode no live donations are processed.</span></h5>
                    </div><!-- /.donate-page__notice -->
                    <form action="#" class="donate-page__form">
                        <div class="donate-page__form__amount">
                            <div class="donate-page__form__amount__box">
                                <span class="donate-page__form__amount__sign">₦</span>
                                <input type="text" value="50000" name="donate_amount" id="donate_amount" placeholder="Amount" class="donate-page__form__amount__input" autofocus>
                            </div><!-- /.donate-page__form__amount__box -->
                            <div class="donate-page__form__amount__buttons">
                                <button type="button" class="donate-page__form__amount__btn donate-page__form__amount__btn--amount">₦<span class="donate-page__form__amount__btn__text">10000</span> </button>
                                <button type="button" class="donate-page__form__amount__btn donate-page__form__amount__btn--amount active">₦<span class="donate-page__form__amount__btn__text">50000</span></button>
                                <button type="button" class="donate-page__form__amount__btn donate-page__form__amount__btn--amount">₦<span class="donate-page__form__amount__btn__text">100000</span></button>
                                <button type="button" class="donate-page__form__amount__btn donate-page__form__amount__btn--amount">₦<span class="donate-page__form__amount__btn__text">200000</span></button>
                                <button type="button" class="donate-page__form__amount__btn donate-page__form__amount__btn--amount">₦<span class="donate-page__form__amount__btn__text">500000</span></button>
                                {{-- <button type="button" class="donate-page__form__amount__btn">Custom amount</button> --}}
                            </div><!-- /.donate-page__form__amount__buttons -->
                        </div><!-- /.donate-page__form__amount -->
                        <div class="donate-page__form__payment">
                            <h3 class="donate-page__form__title">Select Payment Method</h3><!-- /.donate-page__form__title -->
                            <div class="donate-page__form__payment__method">
                                <div class="donate-page__form__payment__method__item custom-radio">
                                    <input type="radio" id="account" name="checkout-info" class="custom-radio__input" checked>
                                    <label for="account" class="custom-radio__title">Online donation</label>
                                </div>
                                <div class="donate-page__form__payment__method__item custom-radio">
                                    <input type="radio" id="ship" name="checkout-info" class="custom-radio__input">
                                    <label for="ship" class="custom-radio__title">offline donation</label>
                                </div>
                            </div>
                        </div><!-- /.donate-page__form__payment -->
                        <div class="donate-page__form__info form-one">
                            <h3 class="donate-page__form__info__title donate-page__form__title">Personal Info</h3><!-- /.donate-page__form__title -->
                            <div class="row gutter-y-30">
                                <div class="col-xl-6">
                                    <div class="form-one__control">
                                        <input type="text" name="first_name" id="first_name" placeholder="first name" class="form-one__control__input">
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-xl-6 -->
                                <div class="col-xl-6">
                                    <div class="form-one__control">
                                        <input type="text" name="last_name" id="last_name" placeholder="last name" class="form-one__control__input">
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-xl-6 -->
                                <div class="col-12">
                                    <div class="form-one__control">
                                        <input type="email" name="email" id="email" placeholder="email address" class="form-one__control__input">
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-12 -->
                                <div class="col-12">
                                    <div class="form-one__control">
                                        <button type="submit" class="cleenhearts-btn">
                                            <span class="cleenhearts-btn__icon-box">
                                                <span class="cleenhearts-btn__icon-box__inner"><span class="icon-duble-arrow"></span></span>
                                            </span>
                                            <span class="cleenhearts-btn__text">donate now</span>
                                        </button>
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.donate-page__form__info -->
                    </form><!-- /.donate-page__form -->
                </div><!-- /.donate-page__content -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.donate-page section-space -->

{{-- <section class="subscribe">
    <div class="subscribe__bg" style="background-image: url('assets/images/backgrounds/subscribe-bg-1-1.jpg');"></div><!-- /.subscribe__bg -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="subscribe__content">
                    <span class="subscribe__title-image icon-email"></span>
                    <h2 class="subscribe__title">Subscribe Now</h2>
                </div><!-- /.subscribe__content -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7 wow fadeInUp">
                <form action="#" data-url="MAILCHIMP_FORM_URL" class="subscribe__form mc-form" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <input type="email" name="EMAIL" id="subscribe" placeholder="enter your email" class="subscribe__form__input">
                    <button type="submit" class="subscribe__form__btn"><span class="subscribe__form__btn__text">Subscribe now</span> <span class="subscribe__form__btn__icon icon-paper-plane"></span></button>
                </form><!-- /.subscribe__form -->
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="subscribe__shape">
        <div class="subscribe__shape__one"></div><!-- /.subscribe__shape__one -->
        <div class="subscribe__shape__two"></div><!-- /.subscribe__shape__one -->
    </div><!-- /.subscribe__shape -->
</section><!-- /.subscribe --> --}}


@endsection
