@extends('users.profiles.profiles')

@section('secondary_menu')
        <!-- secondary menu start -->
        <div class="menu-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secondary-menu-wrapper bg-white">
                            <div class="page-title-inner">
                                <h4 class="page-title">about</h4>
                            </div>
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                        <li><a href="#"><span>facebook</span> <i class="flaticon-facebook"></i></a></li>
                                        <li><a href="#"><span>twitter</span> <i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                        <li><a href="#"><span>google</span> <i class="flaticon-google-plus"></i></a></li>
                                        <li><a href="#"><span>pinterest</span> <i class="flaticon-pinterest"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="post-settings-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="post-settings arrow-shape">
                                    <ul>
                                        <li><button>edit profile</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- secondary menu end -->

        <!-- about author details start -->
        <div class="about-author-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card widget-item">
                            <div class="about-me">
                                <ul class="nav flex-column about-author-menu">
                                    <li><a href="#one" data-toggle="tab" class="active">Something About Me</a></li>                                    
                                    <li><a href="#two" data-toggle="tab">Followers</a></li>
                                    <li><a href="#two" data-toggle="tab">Following</a></li>
                                    <li><a href="#two" data-toggle="tab">Date of Birth</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="about-description">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="one">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="{{asset('profile')}}">{{ $user[0]->name }}</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>edit profile</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{  $user[0]->description }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="two">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="{{asset('profile')}}">{{ $user[0]->name }}</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                    <li><button>edit profile</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $user[0]->followers }}</p>
                                    </div>
                                </div>
                        
                                <div class="tab-pane fade" id="four">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="{{asset('profile')}}">{{ $user[0]->name }}</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                    <li><button>edit profile</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $user[0]->following }}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="five">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="{{asset('profile')}}">{{ $user[0]->name }}</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                    <li><button>edit profile</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ $user[0]->birthdate }}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about author details start -->

        <!-- photo section start -->
        <div class="photo-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <h5 class="content-title">photos</h5>
                            <div class="content-body">
                                <div class="row mt--30">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="photo-group">
                                            <div class="gallery-toggle">
                                                <div class="d-none product-thumb-large-view">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                </div>
                                                <div class="gallery-overlay">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <div class="view-icon"></div>
                                                </div>
                                                <div class="photo-gallery-caption">
                                                    <h3 class="photos-caption">office hangout (06)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="photo-group">
                                            <div class="gallery-toggle">
                                                <div class="d-none product-thumb-large-view">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                </div>
                                                <div class="gallery-overlay">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <div class="view-icon"></div>
                                                </div>
                                                <div class="photo-gallery-caption">
                                                    <h3 class="photos-caption">pure nature (17)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="photo-group">
                                            <div class="gallery-toggle">
                                                <div class="d-none product-thumb-large-view">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                </div>
                                                <div class="gallery-overlay">
                                                    <img src="{{asset('images/photos/photo-1.jpg')}}" alt="Photo Gallery">
                                                    <div class="view-icon"></div>
                                                </div>
                                                <div class="photo-gallery-caption">
                                                    <h3 class="photos-caption">chill zone (06)</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="load-more text-center">
                                            <button class="load-more-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- photo section end -->

        <!-- friend section start -->
        <div class="friends-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <h5 class="content-title">friends</h5>
                            <div class="content-body">
                                <div class="row mt--20">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{{asset('images/photos/photo-1.jpg')}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Kate Midiltoin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{{asset('images/photos/photo-1.jpg')}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{{asset('images/photos/photo-1.jpg')}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">william henry</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="friend-list-view">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{{asset('images/photos/photo-1.jpg')}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">ashim pual</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="load-more text-center">
                                            <button class="load-more-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- friend section end -->

        <!-- favorite book section start -->
        <div class="faborite-books">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <h5 class="content-title">favorite books</h5>
                            <div class="content-body">
                                <div class="row favorite-item-carousel">
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="assets/images/books/book-1.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="assets/images/books/book-2.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="assets/images/books/book-3.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="assets/images/books/book-4.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="assets/images/books/book-5.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="assets/images/books/book-6.jpg" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="load-more text-center">
                                            <button class="load-more-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- favorite book section end -->

@endsection