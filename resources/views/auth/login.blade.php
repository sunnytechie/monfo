@extends('layouts.guest')
@section('content')
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome back</h1>
                        <p class="lead">
                            Don't have an account? Contact admin to create one for you.
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/monfo-removebg.png') }}" alt="Monfo"
                                        class="img-fluid img-fit rounded-circle" width="132" height="132" />
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input
                                        class="form-control form-control-lg"
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Enter your email" />
                                        @if ($errors->has('email'))
                                            <strong style="color: red">{{ $errors->first('email') }}</strong>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password"
                                            placeholder="Enter your password" />
                                        <small>
                                            <a href="{{ route('password.request') }}">Forgot password?</a>
                                        </small>
                                    </div>

                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember"
                                                name="remember" checked>
                                            <span class="form-check-label">
                                                Remember me next time
                                            </span>
                                        </label>
                                    </div>

                                    <div class="text-center mt-3">
                                        <button class="btn btn-lg btn-primary">Sign in</button>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
