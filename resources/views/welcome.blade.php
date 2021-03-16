@include('users.layouts.header')

<body class="bg-transparent">
    <main>
        <div class="main-wrapper pb-0 mb-0">
            <div class="timeline-wrapper">
                <div class="timeline-header">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters align-items-center m-0 p-0">
                        <!-- <div class="row no-gutters align-items-center m-0"> -->
                            <div class="col-lg-6">
                                <div class="timeline-logo-area d-flex align-items-center">
                                    <div class="timeline-logo">
                                        <a href="index.html">
                                            <img src="{{asset('images/logo/logo.png')}}" alt="timeline logo">
                                        </a>
                                    </div>
                                    <div class="timeline-tagline">
                                        <h6 class="tagline">It’s helps you to connect and share with the people in your life</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-area">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm">
                                                <input id="email" type="email" class="single-field @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm">
                                                <input id="password" type="password" class="single-field @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <button type="submit" class="login-btn">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-page-wrapper">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="timeline-bg-content bg-img" data-bg="{{ asset('images/timeline/adda-timeline.jpg') }}">
                                    <h3 class="timeline-bg-title">Let’s see what’s happening to you and your world. Welcome in Feminbook.</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="signup-form-wrapper m-0 border">
                                    <!-- <h5 class="create-acc text-center">Create An Account</h5> -->
                                    <div class="signup-inner text-center">
                                        <h3 class="title">Create An Account</h3>
                                        <form class="signup-inner--form" action="{{ route('register') }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <input id="register_name" type="text" class="single-field @error('register_name') is-invalid @enderror" placeholder="Full Name" value="{{ old('register_name') }}" name="register_name" required autocomplete="name" autofocus>
                                                    @error('register_name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <input id="register_email" type="email" class="single-field @error('register_email') is-invalid @enderror" placeholder="Email" value="{{ old('register_email') }}" name="register_email" required autocomplete="email">
                                                    @error('register_email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="register_password" type="password" class="single-field @error('register_password') is-invalid @enderror" placeholder="Password" name="register_password" required autocomplete="new-password">                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="register_password-confirm" type="password" class="single-field" name="register_password_confirmation" placeholder="Re-Enter Password" required autocomplete="new-password">
                                                </div>
                                                <div class="">
                                                    @error('register_password')
                                                        {{ $message }}
                                                    @enderror
                                                </div> 
                                                
                                                <div class="col-12">
                                                    <input id="birthdate" type="date" class="single-field" name="birthdate" value="{{ old('birthdate') }}" required>
                                                </div>
                                                <div class="col-12">
                                                    <button class="submit-btn">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@include('users.layouts.footer')