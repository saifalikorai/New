
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
                                    <a href="{{asset('profile')}}" class="profile-thumb-2">
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
                        <!-- <div class="card widget-item">
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
                        </div> -->
                        <!-- widget single item end -->
                    </aside>
                </div>
<div class="col-lg-6 order-1 order-lg-2">
                        <!-- share box start -->
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->
                           <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                    @if(session()->has('success1'))
            <div id="toast-container" class="toast-top-right">
                <div class="toast toast-success" aria-live="polite" style="">
                    <div class="toast-message">{{session()->get('success1')}}</div>
                </div>
            </div>
        @endif
                                </div>
                                <!-- share content box end -->


                               
                            <!-- Modal start -->
                            <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Post Your Blog</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        {{Form::open(['route' => 'bloginsert', 'method' => 'POST', 'class' => '', 'enctype'=>'multipart/form-data'])}}
                                        
                                            <div class="modal-body">
                                               
                                            <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Blog Title">
                                                    <label> Description </label> 
                                           
                                                <textarea id="caption" name="caption" class="share-field-big custom-scroll" placeholder="Say Something" required></textarea>
                                                <input type="file" class=""  id="picture" name="image" multiple accept=".jpg, .jpeg, .png, .gif" />
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
                        <!-- share box end -->

                        <!-- post status start -->
                        
<?php foreach($blog as $key => $value){
    //echo $value->title;
 ?>
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author"> 
                                    <h6 class="author"><a href="profile.html">{{ Auth::user()->name }}</a></h6>
                                    <span class="post-time"> <?php  echo $value['created_at']; ?></span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <li><button>copy link to adda</button></li>
                                            <li><button>edit post</button></li>
                                            <li><button>embed adda</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                  <label for="exampleInputEmail1"> <?php  echo $value['title']; ?></label>
                                <p class="post-desc">
                                  <?php  echo $value['tag_line']; ?>
                                </p>
                                <div class="post-thumb-gallery">
                                    <figure class="post-thumb img-popup">
                                        <a href=""><?php $image=$value['image']; ?>
                                            <img src='{{"images/blog/$image" }}' alt="post image">
                                        </a>
                                    </figure>
                                </div>
                                <div class="post-meta">
                                    
                                   <span id="icon_{{$value['id']}}">
                                    @if($value['my_like'])
                                    
                                    <button class="post-meta-like">
                                        <i id="dislike_blog" onclick="dislike_blog(<?php echo $value['id']; ?>)" value="<?php echo $value['id']; ?>" class="fa fa-thumbs-up"> </i>

                                     <!-- // blue color -->
                                    </button>
                                     @else 
                                    <button class="post-meta-like">
                                        <i id="like_blog" onclick="like_blog(<?php echo $value['id']; ?>)" value="<?php echo $value['id']; ?>" class="fa fa-thumbs-down"> </i>
                                    <!-- //white color -->
                                     
                                    </button>
                                     @endif 
                                 </span>
                                      <span id="count_{{$value['id']}}" >  <?php echo count($value['like']);?> </span><p>people like this</p>

                                     
                                       
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-comment">
                                                <i class="bi bi-chat-bubble"></i>
                                                <span>0</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">

                                                <i class="bi bi-share"></i>
                                                <span>0</span>
                                            </button>
                                        </li>
                                    </ul>

                                </div>
                                <div class="card-footer">
                                    <form method="post" action="insert_comment" >
                                        @csrf
                                        <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="" class="img-fluid img-circle img-sm"> 
                                        <div class="img-push">
                                            <input type="text" name="comment" placeholder="Press enter to post comment" class="form-control form-control-sm">

                                            <input type="hidden" name="blog_id" value=" <?php  echo $value['id']; ?> " > 

                                           <button type="submit" class="btn btn-primary">Post</button>


                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                         <?php }  ?>
                        <!-- post status end -->

                 


        

                

     

     


                    </div>
                
                            

                                    
                                </div>
                            
                            </div>
                            <!-- post status end -->


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
                $.each(resultData,function(index,row){
                    var editUrl = url+'/'+row.id+"/edit";
                    bodyData+="<tr>"
                    bodyData+="<td>"+ i++ +"</td><td>"+row.name+"</td><td>"+row.email+"</td><td>"+row.phone+"</td>"
                    +"<td>"+row.city+"</td><td><a class='btn btn-primary' href='"+editUrl+"'>Edit</a>" 
                    +"<button class='btn btn-danger delete' value='"+row.id+"' style='margin-left:20px;'>Delete</button></td>";
                    bodyData+="</tr>";
                    
                })
                $("#bodyData").append(bodyData);
            }
        });


  });
        
});
</script>








    <script>
// $(document).ready(function() {
   
    // $('#like_blog').on('click', function() {
        function dislike_blog(val){

              console.log(val);
      // alert(name);

     
     
          $.ajax({
              url: "{{URL('/dislikeblog')}}",
              type: "POST",
              data: {
                  
                  
                  blog_id: val,
                  _token:'{{ csrf_token() }}'
                 
              },
              
            cache: false,
            dataType: 'json',
              success: function(dataResult){
                  console.log(dataResult);
                  var id="#icon_"+val;
                  let count="#count_"+val;
                  console.log(id);
                  console.log(count);
                  var button=$(id).html();
                  $(id).empty();
                // console.log($(id).html());
                  var button="<button class='post-meta-like'><i onclick='like_blog("+val+")' value='"+val+"' class='fa fa-thumbs-down'> </i></button>"
                $(id).append(button);
                var asd=parseInt($(count).html());
                asd=asd-1;
                $(count).empty();
                console.log(asd);
                 $(count).append(asd);
              }
          });
      
        }
        function like_blog(val){
      // var name = $('#like_blog').val();
      console.log(val);
      // alert(name);

     
     
          $.ajax({
              url: "{{URL('/likeblog')}}",
              type: "POST",
              data: {
                  
                  
                  blog_id: val,
                  _token:'{{ csrf_token() }}'
                 
              },
              
            cache: false,
            dataType: 'json',
              success: function(dataResult){
                  console.log(dataResult);
                   console.log(dataResult);
                  var id="#icon_"+val;
                    let count="#count_"+val;
                  console.log(count);
                  var button=$(id).html();
                  $(id).empty();
                console.log($(id).html());
                  var button="<button class='post-meta-like'><i onclick='dislike_blog("+val+")' value='"+val+"' class='fa fa-thumbs-up'> </i></button>"
                console.log(button);
                $(id).append(button);
                 var asd=parseInt($(count).html());
                asd=asd+1;
                $(count).empty();
                console.log(asd);
                 $(count).append(asd);
                  
              }
          });
      
      }
  // });
// });
</script>





<script type="text/javascript">



  function reply_click(clicked_id)
  {
      
     alert(clicked_id);


 $.ajax({
            url: "workreg.php",
            method: "POST",
            data: { clicked_id }
                .done(data => {
                    alert(data);
                })
                .fail(err => console.error(err))
        })

     // var CSRF_TOKEN =  clicked_id



  }
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