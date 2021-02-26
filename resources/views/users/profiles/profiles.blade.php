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
                                <a href="">
                                    <img src="{{$user[0]->profile_pic_path}}" width="270" height="270" alt="profile picture">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                        <li><a href="{{asset('profiles')}}">timeline</a></li>
                                        <li><a href="{{route('profiles.photo', $user[0]->id )}}">photos</a></li>
                                        <li><a href="">friends</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <add-friend :user="{{ $user[0]->id }}"></add-friend>
                </div>
            </div>
        </div>
        <!-- profile menu area end -->

        @yield('secondary_menu')

    </div>

@endsection