@extends('users.layouts.app')

@section('content')

    <div class="main-wrapper">
        <!-- profile banner area start -->
        <div class="profile-banner-large bg-img" data-bg="{{asset('images/banner/profile-banner.jpg')}}">
        </div>
        <!-- profile banner area end -->

        <!-- profile menu area start -->
        <div class="profile-menu-area secondary-navigation-style bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a href="{{asset('profile')}}">
                                    <img src="{{ Auth::user()->profile_pic_path }}" width="270" height="270" alt="profile picture">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                        <li><a href="{{asset('profile')}}">timeline</a></li>
                                        <li><a href="{{asset('photos')}}">photos</a></li>
                                        <li><a href="{{asset('friends')}}">friends</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 d-none d-md-block">
                        <div class="profile-edit-panel">
                            <a class="edit-btn" href="{{asset('setting')}}">edit profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- profile menu area end -->

        @yield('secondary_menu')

    </div>

@endsection