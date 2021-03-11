<body>

    <!-- header area start -->
    <header>
        <div class="header-top sticky bg-white d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <!-- header top navigation start -->
                        <div class="header-top-navigation">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{asset('home')}}">home</a></li>
                                    <li class="msg-trigger"><a class="msg-trigger-btn" href="#a">message</a>
                                        <div class="message-dropdown" id="a">
                                            <div class="dropdown-title">
                                                <p class="recent-msg">recent message</p>
                                                <!-- <div class="message-btn-group">
                                                    <button>New Message</button>
                                                </div> -->
                                            </div>
                                            <ul class="dropdown-msg-list">
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{asset('images/profile/profile-small-3.jpg')}}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content">
                                                        <h6 class="author">
                                                            <a href="profile.html">Mili Raoulin</a>
                                                        </h6>
                                                        <p> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default </p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>25 Apr 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{asset('images/profile/profile-small-4.jpg')}}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content">
                                                        <h6 class="author"><a href="profile.html">Jhon Doe</a></h6>
                                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>15 May 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{asset('images/profile/profile-small-5.jpg')}}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content">
                                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>20 Jun 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                            </ul>
                                            <!-- <div class="msg-dropdown-footer">
                                                <button>See all in messenger</button>
                                                <button>Mark All as Read</button>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li class="notification-trigger"><a class="msg-trigger-btn" href="#b">notification</a>
                                        <div class="message-dropdown" id="b">
                                            <div class="dropdown-title">
                                                <p class="recent-msg">Notification</p>
                                                <!-- <button>
                                                    <i class="flaticon-settings"></i>
                                                </button> -->
                                            </div>
                                            <ul class="dropdown-msg-list">
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{asset('images/profile/profile-small-3.jpg')}}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a href="profile.html">Robert Faul</a>,
                                                        <a href="profile.html">william jhon</a>
                                                        <p>and 35 other people reacted to your photo</p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>25 Apr 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{asset('images/profile/profile-small-4.jpg')}}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a href="profile.html">Robert mushkil</a>,
                                                        <a href="profile.html">Terry jhon</a>
                                                        <p>and 20 other people reacted to your photo</p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>20 May 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{asset('images/profile/profile-small-6.jpg')}}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a href="profile.html">Horijon Mbala</a>,
                                                        <a href="profile.html">Bashu jhon</a>
                                                        <p>and 55 other people reacted to your post</p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>15 Jan 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                            </ul>
                                            <!-- <div class="msg-dropdown-footer">
                                                <button>See all in messenger</button>
                                                <button>Mark All as Read</button>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li class="request-trigger"><a class="msg-trigger-btn" href="#c">request</a>
                                        <div class="message-dropdown" id="c">
                                            <div class="dropdown-title">
                                                <p class="recent-msg">Friend Request</p>
                                                <!-- <button>
                                                    <i class="flaticon-settings"></i>
                                                </button> -->
                                            </div>
                                            <ul class="dropdown-msg-list">
                                                @foreach ($friend as $key => $value)
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{$value->suser->profile_pic_path}}" alt="">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        
                                                        <h6>
                                                        <a href="{{route('profiles', $value->suser->id)}}">{{$value->suser->name}}</a>
                                                        </h6>
                                                        
                                                        <p>
                                                    <a class="btn btn-sm confirm-req" data-id="{{$value->suser->id}}" href="javascript:void(0)">confirm</a>
                                                            
                                                            <a class="btn btn-sm delete" href="">delete</a>
                                                        </p>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>25 Apr 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                @endforeach
                                            </ul>
                                            <!-- <div class="msg-dropdown-footer">
                                                <button>See all in messenger</button>
                                                <button>Mark All as Read</button>
                                            </div> -->
                                        </div>
                                    </li>
                                    <li><a href="{{asset('blog')}}">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header top navigation start -->
                    </div>

                    <!-- brand logo  -->
                    <!-- <div class="col-md-2">
                        <div class="brand-logo text-center">
                            <a href="{{asset('home')}}">
                                <img src="{{asset('images/logo/logo.png')}}" alt="brand logo">
                            </a>
                        </div>
                    </div> -->

                    <div class="col-md-6">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <!-- header top search start -->
                            <!-- <div class="header-top-search">
                                <form class="top-search-box">
                                    <input type="text" placeholder="Search" class="top-search-field">
                                    <button class="top-search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div> -->
                            <!-- header top search end -->

                            <!-- profile picture start -->
                            <div class="profile-setting-box">
                                <div class="profile-thumb-small">
                                    <a href="javascript:void(0)" class="profile-triger">
                                        <figure>
                                            <img src="{{ Auth::user()->profile_pic_path }}" width="35" height="35" alt="profile picture">
                                        </figure>
                                    </a>
                                    <div class="profile-dropdown">
                                        <div class="profile-head">
                                            <h5 class="name"><a href="{{asset('profile')}}">{{ Auth::user()->name }}</a></h5>
                                            <a class="mail" href="{{asset('profile')}}">{{ Auth::user()->email }}</a>
                                        </div>
                                        <div class="profile-body">
                                            <ul>
                                                <li><a href="{{asset('profile')}}"><i class="flaticon-user"></i>Profile</a></li>
                                                <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                                <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="{{asset('setting')}}"><i class="flaticon-settings"></i>Setting</a></li>
                                                <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="flaticon-unlock"></i>
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- profile picture end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    <header>
        <div class="mobile-header-wrapper sticky d-block d-lg-none">
            <div class="mobile-header position-relative ">
                <div class="mobile-logo">
                    <a href="{{asset('home')}}">
                        <img src="{{asset('images/logo/logo-white.png')}}" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu w-100">
                    <ul>
                        <li>
                            <button class="notification request-trigger"><i class="flaticon-users"></i>
                                <span>{{$friend->count()}}</span>
                            </button>
                            <ul class="frnd-request-list">
                                @foreach ($friend as $key => $value)
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="{{route('profiles', $value->suser->id)}}">
                                                <img src="{{$value->suser->profile_pic_path}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="{{route('profiles', $value->suser->id)}}">{{$value->suser->name}}</a></h6>
                                            <p class="author-subtitle">{{$value->suser->description}}</p>
                                            <div class="request-btn-inner">
                                                <a class="frnd-btn confirm-req" data-id="{{$value->suser->id}}">confirm</a>
                                                <a class="frnd-btn delete" href="">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <button class="notification"><i class="flaticon-notification"></i>
                                <span>03</span>
                            </button>
                        </li>
                        <li>
                            <button class="chat-trigger notification"><i class="flaticon-chats"></i>
                                <span>04</span>
                            </button>
                            <div class="mobile-chat-box">
                                <div class="live-chat-title">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="profile.html">
                                            <figure class="profile-thumb-small profile-active">
                                                <img src="{{asset('images/profile/profile-small-15.jpg')}}" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                        <span class="active-pro">active now</span>
                                    </div>
                                    <div class="live-chat-settings ml-auto">
                                        <button class="chat-settings"><img src="{{asset('images/icons/settings.png')}}" alt=""></button>
                                        <button class="close-btn"><img src="{{asset('images/icons/close.png')}}" alt=""></button>
                                    </div>
                                </div>
                                <div class="message-list-inner">
                                    <ul class="message-list custom-scroll">
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-text-field mob-text-box">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="{{asset('images/icons/plane.png')}}" alt="">
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button class="search-trigger">
                                <i class="search-icon flaticon-search"></i>
                                <i class="close-icon flaticon-cross-out"></i>
                            </button>
                            <div class="mob-search-box">
                                <form class="mob-search-inner">
                                    <input type="text" placeholder="Search Here" class="mob-search-field">
                                    <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mobile-header-profile">
                    <!-- profile picture end -->
                    <div class="profile-thumb profile-setting-box">
                        <a href="javascript:void(0)" class="profile-triger">
                            <figure class="profile-thumb-middle">
                                <img src="{{ Auth::user()->profile_pic_path }}" class="mt-3" height="60%" alt="profile picture">
                            </figure>
                        </a>
                        <div class="profile-dropdown text-left">
                            <div class="profile-head">
                                <h5 class="name"><a href="{{asset('profile')}}">{{ Auth::user()->name }}</a></h5>
                                <a class="mail" href="{{asset('profile')}}">{{ Auth::user()->email }}</a>
                            </div>
                            <div class="profile-body">
                                <ul>
                                    <li><a href="{{asset('profile')}}"><i class="flaticon-user"></i>Profile</a></li>
                                    <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                    <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                </ul>
                                <ul>
                                    <li><a href="{{asset('setting')}}"><i class="flaticon-settings"></i>Setting</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="flaticon-unlock"></i>
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- profile picture end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->



    <!-- Main content -->
    <main>
        @if(session()->has('success'))
            <div id="toast-container" class="toast-top-right">
                <div class="toast toast-success" aria-live="polite" style="">
                    <div class="toast-message">{{session()->get('success')}}</div>
                </div>
            </div>
        @endif

        @if(count($errors) > 0)
            
            @foreach ($errors->all() as $error)
                <div id="toast-container" class="toast-top-right">
                    <div class="toast toast-error" aria-live="polite" style="">
                        <div class="toast-message">{{ $error }}</div>
                    </div>
                </div>
            @endforeach
                
        @endif

        <div id="app">

            @yield('content')

        </div>

    </main>

    


    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer area start -->
   {{-- inbox Message box start --}}

    <!-- footer area start -->
    <footer class="d-none d-lg-block">
        <div class="footer-area reveal-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-wrapper">
                            <div class="footer-card position-relative">
                                <div class="friends-search">
                                    <form class="search-box">
                                        <input type="text" placeholder="Search For Friends" class="search-field">
                                        <button class="search-btn"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="friend-search-list">
                                    <div class="frnd-search-title">
                                        <button class="frnd-search-icon">
                                            <i class="flaticon-settings"></i>
                                        </button>
                                        <p>search for friends</p>
                                        <button class="close-btn" data-close="friend-search-list">
                                            <i class="flaticon-cross-out" ></i>
                                        </button>
                                    </div>
                                    <div class="frnd-search-inner custom-scroll">
                                        <ul>
                                            <!-- show other users -->
                                            @foreach($person as $key => $value)
                                           
                                            <li class="d-flex align-items-center profile-active">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb active">
                                                    <a href="javascript:" id="submitt" value="1" >
                                                        <figure class="profile-thumb-small">
                                                        <img src="{{$value->profile_pic_path}}" alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->
                                                <div class="posted-author">
<a href="javascript:void(0)" id="showMessageBox" data-receiver-id="{{$value->id}}" data-sender-id="{{ Auth::user()->id }}" >
                                                        <h6 class="author">{{$value->name}}</h6></a>
                                                    <a href="{{route('profiles', $value->id)}}">Add Friend</a>
                                                </div>

                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-small mb-0 active-profile-wrapper">
                                <div class="active-profiles-wrapper">
                                    <div class="active-profile-carousel slick-row-20 slick-arrow-style">
                                        
                                        @foreach ($friends as $key => $value)
                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="javascript:void(0)">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{$value->suser->profile_pic_path}}" alt="">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->
                                        @endforeach

                                    </div>
                                </div>
                            </div>

{{-- Inbox Message start End --}}


{{-- Message box start --}}


                            <div class="footer-card position-relative" id="messages">
                                
                            </div>
                        


{{-- Message box end --}}




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- footer area start -->
    <footer class="d-block d-lg-none">
        <div class="footer-area reveal-footer">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-footer-inner d-flex">
                            <div class="mobile-frnd-search">
                                <button class="search-toggle-btn"><i class="flaticon-search"></i></button>
                            </div>
                            <div class="mob-frnd-search-inner">
                                <form class="mob-frnd-search-box d-flex">
                                    <input type="text" placeholder="Search Your Friends" class="mob-frnd-search-field">
                                </form>
                            </div>
                            <div class="card card-small mb-0 active-profile-mob-wrapper">
                                <div class="active-profiles-mob-wrapper slick-row-10">
                                    <div class="active-profile-mobile">
                                        <div class="single-slide">
                                            <div class="profile-thumb active profile-active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small profile-active">
                                                        <img src="{{asset('images/profile/profile-small-5.jpg')}}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </footer>
    <!-- footer area end -->

<script>





    $(document).on("click", "#showMessageBox", function() { 
        
        var receiverId = $(this).data("receiver-id");
        var senderId = $(this).data("sender-id");
        //alert(receiverId);
        //alert(senderId);
        var url = "{{URL('showMessageBox')}}";
        //var dltUrl = url+"/"+id;
        $.ajax({
            url: url,
            type: "POST",
            cache: false,
            data:{

                receiverId: receiverId, senderId: senderId, _token:'{{ csrf_token() }}'
            },
            
            success: function(dataResult){
               //alert(dataResult);
               $("#messages").append(dataResult);
                //var dataResult = JSON.parse(dataResult);
                
            }
        });
    });


    $(document).on("click", "#sendMessage", function() { 

        var receiverId = $('#receiverId').val();
        var senderId = $('#senderId').val();
        var textMessages = $('#textMessages').val();
        
        //alert(receiverId);
        
        var url = "{{URL('sendMessage')}}";
        
        
        
        $.ajax({
            url: url,
            type: "POST",
            cache: false,
            data:{

                receiverId: receiverId, senderId: senderId,textMessages:textMessages,
                
                _token:'{{ csrf_token() }}'
            },
            
            
            
            success: function(dataResult){
               alert('dataResult');
               $("#messages").append(dataResult);
                //var dataResult = JSON.parse(dataResult);
                
            }
        });
    });







</script>


