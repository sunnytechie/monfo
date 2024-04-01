<section class="donations-four section-space" id="donation">
    {{-- <div class="donations-four__bg" style="background-image: url(assets/images/donations/donation-bg-4-1.jpg);"></div><!-- /.donations-four__bg --> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="donate-page__content">
                    {{-- <h2 class="donate-page__title text-center">Donate Now</h2><!-- /.donate-page__title --> --}}
                    <p class="donate-page__text text-center">Your donation will help us to provide the necessary support to the Mommy Nches Foundation. We are committed to making a difference in the lives of every woman and young lady in the society.</p><!-- /.donate-page__text -->
                    <div class="donate-page__notice">
                        <i class="fas fa-exclamation-triangle"></i>
                        <h5 class="donate-page__notice__text">Notice: <span>All donations are made to the monfo foundation</span></h5>
                    </div><!-- /.donate-page__notice -->

                    <form action="{{ route('donation.payment') }}" method="POST" class="donate-page__form">
                        @csrf
                        <div class="donate-page__form__amount">

                            <div class="donate-page__form__amount__box">
                                <span class="donate-page__form__amount__sign">₦</span>
                                <input type="number" name="donate_amount" id="donate_amount" placeholder="Amount" class="donate-page__form__amount__input" autocomplete="off">
                            </div><!-- /.donate-page__form__amount__box -->
                        </div><!-- /.donate-page__form__amount -->

                        {{-- <div class="donate-page__form__payment">
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
                        </div><!-- /.donate-page__form__payment --> --}}

                        <div class="donate-page__form__info form-one">
                            <h3 class="donate-page__form__info__title donate-page__form__title">Personal Info</h3><!-- /.donate-page__form__title -->
                            <div class="row gutter-y-30">
                                <div class="col-xl-6">
                                    <div class="form-one__control">
                                        <input type="text" name="first_name" id="first_name" placeholder="First name" class="form-one__control__input">
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-xl-6 -->
                                <div class="col-xl-6">
                                    <div class="form-one__control">
                                        <input type="text" name="last_name" id="last_name" placeholder="Last name" class="form-one__control__input">
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-xl-6 -->
                                <div class="col-md-6">
                                    <div class="form-one__control">
                                        <input type="email" name="email" id="email" placeholder="Email address" class="form-one__control__input">
                                    </div><!-- /.form-one__control -->
                                </div><!-- /.col-12 -->
                                <div class="col-md-6">
                                    <div class="form-one__control">
                                        <input type="tel" name="phone" id="phone" placeholder="Mobile" class="form-one__control__input">
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
</section><!-- /.donations-four section-space -->
