@extends('users.layouts.app')

@section('content')

    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area">

                     
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
                            </div>fdsfdsfds
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">

                    @foreach($post as $key => $value)

                        @if($value->isShared == true)

                            <!-- post status start -->
                            <div class="card">
                                <!-- post title start -->
                                <div class="post-title d-flex align-items-center">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="{{route('profiles', $value->user->id)}}">
                                            <figure class="profile-thumb-middle">
                                                <img src="{{$value->user->profile_pic_path}}" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->


                                    <div class="posted-author">
                                        <h6 class="author"><a href="{{route('profiles', $value->user->id)}}">{{ $value->user->name }}</a> </h6>
                                        <span class="post-time">{{(new Carbon\Carbon($value->created_at))->diffForHumans()}}</span>
                                    </div>

                                    @if($value->user->id == Auth::user()->id)
                                    <div class="post-settings-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <div class="post-settings arrow-shape">
                                            <ul>
                                                <li><a href="javascript:void(0)" id="delete-post" data-id="{{$value->id}}">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <div class="post-content">

                                    <p class="post-desc pb-0">
                                        {{ $value->caption }}
                                    </p>

                                    <?php
                                                
                                        $original_post = \App\Model\Post::find($value->original_post_id);
                                    ?>
                                        
                                    <!-- sub post status start -->
                                    <div class="card">
                                        <!-- post title start -->
                                        <div class="post-title d-flex align-items-center">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="{{route('profiles', $original_post->user->id)}}">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{{$original_post->user->profile_pic_path}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="{{route('profiles', $original_post->user->id)}}">{{ $original_post->user->name }}</a> </h6>
                                                <span class="post-time">{{(new Carbon\Carbon($original_post->created_at))->diffForHumans()}}</span>
                                            </div>
                                        </div>

                                        <!-- post title start -->
                                        <div class="post-content">
                                            <p class="post-desc pb-0">
                                                {{ $original_post->caption }}
                                            </p>
                                            <div class="post-thumb-gallery img-gallery">
                                                @if($original_post->files != null)
                                                <div class="row no-gutters">
                                                    @foreach($original_post->files as $key => $val)
                                                        @if(count($original_post->files) == 1)
                                                            <figure class="post-thumb">                            
                                                                <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                    <img src="{{asset("images/$val->file_path")}}" alt="post image">
                                                                </a>
                                                            </figure>

                                                        @elseif(count($original_post->files) == 2)
                                                            <div class="col-6">
                                                                <figure class="post-thumb">                            
                                                                    <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                        <img src="{{asset("images/$val->file_path")}}" alt="post image">
                                                                    </a>
                                                                </figure>
                                                            </div>
                                                        @else
                                                            @if($loop->first)
                                                                <div class="col-12 text-over">
                                                                    <figure class="post-thumb">                            
                                                                        <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                            <img src="{{asset("images/$val->file_path")}}" alt="post image">
                                                                        </a>
                                                                        <div class="top-right">1/{{count($original_post->files)}}</div>
                                                                    </figure>
                                                                </div>
                                                            @else
                                                                <div class="col-12">
                                                                <!-- <p>{{($loop->count)-1}}</p> -->
                                                                    <figure class="post-thumb">                            
                                                                        <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                            <img src="{{asset("images/$val->file_path")}}" alt="post image"  style="display: none;">
                                                                        </a>
                                                                    </figure>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- sub post status end -->
                                    
                                    <div class="post-meta">

                                        <like-component :post="{{ $value->id }}" :user="{{ Auth::user()->id }}"></like-component>

                                        
                                        <ul class="comment-share-meta">
                                            
                                            <comments-count :post="{{ $value->id }}"></comments-count>

                                            <li>
                                                <button class="post-share" type="button" data-toggle="modal" data-target="#share1">
                                                    <span >
                                                        <i class="bi bi-share"></i>
                                                    </span>
                                                </button>

                                                <!-- Modal start -->
                                                <div class="modal fade" id="share1" aria-labelledby="share1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Share This Post</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            {{Form::open(['route' => 'share', 'method' => 'POST', 'class' => '', 'enctype'=>'multipart/form-data'])}}
                                                                <div class="modal-body custom-scroll">
                                                                    <textarea id="caption" name="caption" class="share-field-big custom-scroll" placeholder="Say Something about this post" required></textarea>
                                                                    <input type="hidden" name="post_id" value="{{$original_post->id}}">
                                                                    <input type="hidden" name="owner" value="{{$original_post->user->id}}">
                                                                    <input type="hidden" name="no_shares" value="{{$original_post->no_of_shares}}">
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
                                            </li>
                                        </ul>
                                    </div>

                                    <comments-component :post="{{ $value->id }}" :user="{{ Auth::user() }}"></comments-component>
                                    
                                </div>
                            
                            </div>
                            <!-- post status end -->

                            
                        @else

                            <!-- post status start -->
                            <div class="card">
                                <!-- post title start -->
                                <div class="post-title d-flex align-items-center">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="{{route('profiles', $value->user->id)}}">
                                            <figure class="profile-thumb-middle">
                                                <img src="{{$value->user->profile_pic_path}}" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->


                                    <div class="posted-author">
                                        <h6 class="author">
                                            <a href="{{route('profiles', $value->user->id)}}">{{ $value->user->name }}</a>
                                        </h6>
                                        <span class="post-time">{{(new Carbon\Carbon($value->created_at))->diffForHumans()}}</span>
                                    </div>

                                    @if($value->user->id == Auth::user()->id)
                                    <div class="post-settings-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <div class="post-settings arrow-shape">
                                            <ul>
                                                <li><a href="javascript:void(0)" id="delete-post" data-id="{{$value->id}}">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <!-- post title start -->

                                <div class="post-content">
                                    <p class="post-desc pb-0">
                                        {{ $value->caption }}
                                    </p>
                                    <div class="post-thumb-gallery img-gallery">
                                        @if($value->files != null)
                                        <div class="row no-gutters">
                                            @foreach($value->files as $key => $val)
                                                @if(count($value->files) == 1)
                                                    <figure class="post-thumb">                            
                                                        <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                            <img src="{{asset("images/$val->file_path")}}" alt="post image">
                                                        </a>
                                                    </figure>

                                                @elseif(count($value->files) == 2)
                                                    <div class="col-6">
                                                        <figure class="post-thumb">                            
                                                            <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                <img src="{{asset("images/$val->file_path")}}" alt="post image">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                @else
                                                    @if($loop->first)
                                                        <div class="col-12 text-over">
                                                            <figure class="post-thumb">                            
                                                                <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                    <img src="{{asset("images/$val->file_path")}}" alt="post image">
                                                                </a>
                                                                <div class="top-right">1/{{count($value->files)}}</div>
                                                            </figure>
                                                        </div>                                            
                                                    @else
                                                        <div class="">
                                                        <!-- <p>{{($loop->count)-1}}</p> -->
                                                            <figure class="post-thumb">                            
                                                                <a class="gallery-selector" href="{{asset("images/$val->file_path")}}">
                                                                    <img src="{{asset("images/$val->file_path")}}" alt="post image"  style="display: none;">
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>
                                    <div class="post-meta">
                                        
                                        <like-component :post="{{ $value->id }}" :user="{{ Auth::user()->id }}"></like-component>

                                        <ul class="comment-share-meta">
                                            
                                            <comments-count :post="{{ $value->id }}"></comments-count>

                                            <li>

                                                <button type="button" data-toggle="modal" data-target="#share2">
                                                    <span class="post-share"> <i class="bi bi-share"></i></span>
                                                    <span> &nbsp {{$value->no_of_shares}}</span>
                                                </button>

                                                <!-- Modal start -->
                                                <div class="modal fade" id="share2" aria-labelledby="share2">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Share This Post</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            {{Form::open(['route' => 'share', 'method' => 'POST', 'class' => '', 'enctype'=>'multipart/form-data'])}}
                                                                <div class="modal-body custom-scroll">
                                                                    <textarea id="caption" name="caption" class="share-field-big custom-scroll" placeholder="Say Something about this post" required></textarea>
                                                                    <input type="hidden" name="post_id" value="{{$value->id}}">
                                                                    <input type="hidden" name="owner" value="{{$value->user->id}}">
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
                                            </li>
                                        </ul>
                                    </div>

                                    <comments-component :post="{{ $value->id }}" :user="{{ Auth::user() }}"></comments-component>

                                </div>
                            </div>
                            <!-- post status end -->

                        @endif
                                            
                    @endforeach

                </div>

                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Recent Notifications</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{asset('images/profile/profile-small-9.jpg')}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">5 min ago</p>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Advertizement</h4>
                            <div class="widget-body">
                                <div class="add-thumb">
                                    <a href="#">
                                        <img src="{{asset('images/banner/advertise.jpg')}}" alt="advertisement">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                    </aside>
                </div>
            </div>
        </div>
    </div>

    <!-- /Delete Post Area -->
    <div class="modal fade" id="DeletePost" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Delete Post</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <!-- /Delete Form Content -->
            
            <p>Are you sure you want to delete this post?</p>

            <!-- /.Delete Form Content -->
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            {{ Form::open(['method' => 'DELETE','route' => ['post.destroy', '1']]) }}
                <input type="hidden" id="post_id" name="post_id" value=""/>
                <button type="submit" class="btn btn-danger">Delete</button>
            {{ Form::close() }}
            
            </div>
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.Delete Post Area End -->

@endsection


@section('new_script')


<script>
    $(document).ready(function() {

                $(document).on('click', '#post', function () {
        var url = "{{URL('userData')}}";
        alert('url');
        $.ajax({
            url: "/userData/getUserData",
            type: "POST",
            data:{ 
                _token:'{{ csrf_token() }}'
            },
            cache: false,
            dataType: 'json',
            success: function(dataResult){
                console.log(dataResult);
                var resultData = dataResult.data;
                var bodyData = '';
                var i=1;

                $("#bodyData").append(bodyData);
            }
        });


  });
        
});
</script>



<script>
    $(document).ready(function (){
        $('#toast-container').fadeOut(3000);

        $('body').on('click', '#delete-post', function () {
          var p_id = $(this).data('id');
          $('#post_id').val(p_id);
          $('#DeletePost').modal('show');
        });
    });

</script>

@endsection