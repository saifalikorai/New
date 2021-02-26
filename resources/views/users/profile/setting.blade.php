@extends('users.layouts.app')

@section('content')
    
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card card-profile widget-item p-0">
                            <div class="profile-banner">
                                <figure class="profile-banner-small">
                                    <a href="#">
                                        <img src="{{asset('images/banner/banner-small.jpg')}}" alt="">
                                    </a>
                                    <a id="profile_pic" class="profile-thumb-2">
                                        <img src="{{ Auth::user()->profile_pic_path }}" alt="" width="80" height="80">
                                    </a>
                                </figure>
                                <div class="profile-desc text-center">
                                    <h6 class="author"><a href="{{asset('profile')}}">{{ Auth::user()->name }}</a></h6>
                                    <p>{{ Auth::user()->description }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item start -->
                     
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">latest top blogs</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">2 min ago</p>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Profile Settings</h4>
                            <div class="widget-body">
                                {{Form::open(['route' => 'saveSetting', 'method' => 'POST', 'enctype'=>'multipart/form-data'])}}
                                    @include('users.profile.setting_master')
                                {{ Form::close() }}              
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Password Settings</h4>
                            <div class="widget-body">
                                {{Form::open(['route' => 'saveSetting', 'method' => 'POST', 'enctype'=>'multipart/form-data'])}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            {{Form::label('password','New Password')}}
                                            {{Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Enter New Password'])}}
                                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}} "></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            {{Form::label('c_password','Confirm Password')}}
                                            {{Form::password('c_password', ['class' => 'form-control','id' => 'c_password', 'placeholder' => 'Re-Enter New Password'])}}
                                            <div class="form-group {{$errors->has('c_password') ? 'has-error' : ''}} "></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            {{Form::label('password','Old Password')}}
                                            {{Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Enter Old Password'])}}
                                            <div class="form-group {{$errors->has('password') ? 'has-error' : ''}} "></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            {{Form::button(isset($model)? 'Update' : 'Save', ['class' => 'btn btn-dark','type' => 'submit'])}}
                                        </div>
                                    </div>
                                {{ Form::close() }}              
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <!-- Modal start -->
                <div class="modal fade" id="profilepicture" aria-labelledby="profilepicture">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Upload Profile Picture</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            {{Form::open(['route' => 'savePicture', 'method' => 'POST', 'class' => '', 'enctype'=>'multipart/form-data'])}}
                                <div class="modal-body">
                                    <input type="file" id="picture" name="picture" accept=".jpg, .jpeg, .png, .gif" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                    <button type="submit" class="post-share-btn" >done</button>
                                </div>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                <!-- Modal end -->

               
            </div>
        </div>
    </div>
    
@endsection

@section('new_script')

<script>
    $(document).ready(function (){
        $('#toast-container').fadeOut(3000);

        $('body').on('click', '#profile_pic', function () {
          $('#profilepicture').modal('show');
        });
    });

    

</script>

@endsection