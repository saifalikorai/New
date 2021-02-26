@extends('users.profile.profile')

@section('secondary_menu')
        <!-- secondary menu start -->
        <div class="menu-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                            <div class="page-title-inner">
                                <h4 class="page-title">photos (120)</h4>
                            </div>
                            <!-- <div class="filter-menu">
                                <button class="active" data-filter="*">all</button>
                                <button data-filter=".timeline">timeline</button>
                                <button data-filter=".upload">upload</button>
                                <button data-filter=".folder">folder</button>
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

        <!-- photo section start -->
        <div class="photo-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <div class="content-body">
                                <div class="row mt--30 photo-filter">
                                    @foreach ($photo as $key => $value)
                                        <div class="col-sm-6 col-md-4 folder">
                                            <div class="photo-group">
                                                <div class="gallery-toggle">
                                                    <div class="d-none product-thumb-large-view">
                                                        <img src="{{asset('images/$value->file_path')}}" alt="Photo Gallery">
                                                    </div>
                                                    <div class="gallery-overlay">
                                                        <img src="{{asset('images/$value->file_path')}}" alt="Photo Gallery">
                                                        <div class="view-icon"></div>
                                                    </div>
                                                    <div class="photo-gallery-caption">
                                                        <h3 class="photos-caption">Post</h3>
                                                    </div>
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
        </div>
        <!-- photo section end -->
@endsection