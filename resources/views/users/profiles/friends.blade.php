@extends('users.profiles.profiles')

@section('secondary_menu')
        <!-- secondary menu start -->
        <div class="menu-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                            <div class="page-title-inner">
                                <h4 class="page-title">friends (12)</h4>
                            </div>
                            <div class="filter-menu">
                                <button class="active" data-filter="*">all</button>
                                <!-- <button data-filter=".recently">recently</button> -->
                                <!-- <button data-filter=".relative">relative</button> -->
                                <!-- <button data-filter=".collage">collage</button> -->
                                <!-- <button data-filter=".request">request</button> -->
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

        <!-- friend section start -->
        <div class="friends-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box friends-zone">
                            <div class="row mt--20 friends-list">
                                <div class="col-lg-3 col-sm-6 recently request">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
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
                                <div class="col-lg-3 col-sm-6 relative">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
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
                                <div class="col-lg-3 col-sm-6 recently collage request">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
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
                                <div class="col-lg-3 col-sm-6 relative request">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">Kate Midiltoin</a></h6>
                                            <button class="add-frnd">friend request sent</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 recently collage">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">Omio Morganik</a></h6>
                                            <button class="add-frnd">friend request sent</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 relative">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
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
                                <div class="col-lg-3 col-sm-6 collage request">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">erik jonson</a></h6>
                                            <button class="add-frnd">add friend</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 relative request">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{asset('images/profile/profile-small-18.jpg')}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">peter looks</a></h6>
                                            <button class="add-frnd">add friend</button>
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
@endsection