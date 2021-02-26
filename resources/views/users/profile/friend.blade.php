@extends('users.profile.profile')

@section('secondary_menu')
        <!-- secondary menu start -->
        <div class="menu-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                            <div class="page-title-inner">
                                <h4 class="page-title">friends ({{$friends->count()}})</h4>
                            </div>
                            <!-- <div class="filter-menu">
                                <button class="active" data-filter="*">all</button>
                                <button data-filter=".recently">recently</button> 
                                <button data-filter=".relative">relative</button>
                                <button data-filter=".collage">collage</button>
                                <button data-filter=".request">request</button>
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
                            </div> -->
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
                                @foreach ($friends as $key => $value)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="friend-list-view">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="{{route('profiles', $value->suser->id)}}">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{{$value->suser->profile_pic_path}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="posted-author">
                                            <h6 class="author"><a href="{{route('profiles', $value->suser->id)}}">{{$value->suser->name}}</a></h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- friend section end -->
@endsection