
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
                    
                    </aside>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                        <div class="card card-small">
                            <div class="share-box-inner">
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <input name="share" class="share-text-field" aria-disabled="true" placeholder="What's on your mind, {{ Auth::user()->name }}?" data-toggle="modal" data-target="#textbox" id="email">
                                        <button class="btn-share">share</button>
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
                                            <h4 class="modal-title">Post Your Blog</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        {{Form::open(['route' => 'bloginsert', 'method' => 'POST', 'class' => '', 'enctype'=>'multipart/form-data'])}}
                                        
                                            <div class="modal-body">
                                               
                                            <label>Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" placeholder="Blog Title"><br>

                                            <label>Description</label> 
                                                <textarea id="caption" name="caption" class="share-field-big custom-scroll" placeholder="Say Something" required></textarea><br><br>

                                            <label>Select Image</label>
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
                                    <h6 class="author"><a href="profile.html">{{ $value['user']['name'] }}</a></h6>
                                    <?php 
                                      $temp = explode(' ',$value['created_at']);
                                    ?>
                                    <span class="post-time"> <?php  echo "<b>Date : </b>".$temp[0]. " <b>Time : </b>".$temp[1]; ?></span>
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
                                        <i id="dislike_blog" onclick="dislike_blog(<?php echo $value['id']; ?>)" value="<?php echo $value['id']; ?>" class="fa fa-thumbs-up" style="color: #dc4734;"> </i>

                                     <!-- // blue color -->
                                    </button>
                                     @else 
                                    <button class="post-meta-like">
                                        <i id="like_blog" onclick="like_blog(<?php echo $value['id']; ?>)" value="<?php echo $value['id']; ?>" class="fa fa-thumbs-up"> </i>
                                    <!-- //white color -->
                                     
                                    </button>
                                     @endif 
                                 </span>&nbsp;
                                      <span id="count_{{$value['id']}}" ><?php echo count($value['like']);?></span><span></span>

                                     
                                       
                                    <ul class="comment-share-meta">
                                        <li>
<<<<<<< HEAD
                                            <button  id="show_comment" class="post-comment" data-toggle="modal" 
                                                data-id="{{$value['id']}}" 
                                                
                                            >
                                                <i class="fa fa-comments" style="margin-top: -5px;"></i>
                                                <span style="padding-left: 0px;" id="commentcount_{{$value['id']}}" ><?php echo Count($value['comment']) ?></span>
=======
                <button  id="show_comment" class="post-comment" data-toggle="modal" data-id="{{$value['id']}}" >
                                                <i class="bi bi-chat-bubble"></i>
                                                <span id="commentcount_{{$value['id']}}" >
                                                    <?php echo Count($value['comment']) ?>
                                                </span>
>>>>>>> 94daa6219ee4204924652aa1dfb6294fce0f44f2
                                            </button>
                                        </li>
                                        <li>
                                            <button class="post-share">
<<<<<<< HEAD
                                                <i class="fa fa-share-alt" style="margin-top: -5px;"></i>
                                                <span style="padding-left: 0px;">0</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div><br>
                                <div class="card-footer">  
                                        <div class="img-push" style="margin-top: 2%;">     
                                            <div class="input-group mb-3">
                                                <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="" class="img-fluid img-circle img-sm image_edit"> 
                                              <textarea type="text" name="comment" placeholder="Write a comment..." class="form-control form-control-sm" rows="2" id="comment_{{$value['id']}}" style="width: 81%;"></textarea>
                                              <input type="hidden" id="blogid_{{$value['id']}}" name="blog_id" value=" <?php  echo $value['id']; ?>" > 
                                              <div class="input-group-append">
                                                <button onclick="post_comment(<?php  echo $value['id']; ?>)" class="btn btn-primary" style="height: 54px;"><i class="bi bi-paper-plane" style="font-size: 18px; font-weight: 600;"></i></button>
                                              </div>
                                            </div>
=======
                                                <i class="bi bi-share"></i>
                                                <span>0</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                        <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="" class="img-fluid img-circle img-sm"> 
                                        <div class="img-push">
                                            <input type="text" name="comment" placeholder="Press enter to post comment" class="form-control form-control-sm" id="comment_{{$value['id']}}">

                                            <!-- <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" > --> 

                                            <input type="hidden" id="blogid_{{$value['id']}}" name="blog_id" value=" <?php  echo $value['id']; ?>" > 

                                           <button onclick="post_comment(<?php  echo $value['id']; ?>)" class="btn btn-primary">Post</button>

>>>>>>> 94daa6219ee4204924652aa1dfb6294fce0f44f2
                                        </div>
                                </div>
                            </div>
                        </div>

                         <?php }  ?>
                        <!-- post status end -->
                    </div> 
                </div>


<div class="modal" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

      <!-- Modal Header -->
      <div class="modal-content"> 
          <div class="modal-header">
            <h4 class="modal-title">Comments</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div id="comment_show_body" class="modal-body">
         
          </div>

          <!-- Modal footer -->
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div> -->
      </div> 
  </div>
</div>
                            
</div>
                            <!-- post status end -->

@endsection


@section('new_script')

<script>
    // $(document).on('click', '#post_comment', function () {

function post_comment(blogid){

    var comment = $('#comment_'+blogid).val();
    var blog_id = $('#blogid_'+blogid).val();

     // alert(blog_id);
        
    $.ajax({
        url: "{{URL('/insert_comment')}}",
        type: "POST",
        cache: false,
        data:{

            comment: comment, blog_id: blog_id, _token:'{{ csrf_token() }}'
        },
        
        success: function(dataResult){
                  
               $('#comment_'+blogid).val("");
               var commentcount=parseInt($('#commentcount_'+blogid).html());
               alert(commentcount);
               commentcount = commentcount+1;
               $('#commentcount_'+blogid).empty();
               $('#commentcount_'+blogid).append(commentcount); 
               // $(count).empty();
               // $(count).append(asd);  
        }

    });
}

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

// $(document).ready(function() {
   function show_comment(){
    var id = $(this).attr('data-id');
    console.log( $(this).data("id"));
        alert(id);
   }
    $(document).on('click', '#show_comment', function () {
        var id = $(this).attr('data-id');
        $.ajax({
              url: "{{URL('/showallcomment')}}",
              data: {
                  blog_id: id,
              },
              
            cache: false,
            dataType: 'json',
              success: function(dataResult){
                  console.log(dataResult);
                  if(dataResult.length > 0){
                  var comment="<div>";
                  for (var i = 0; i < dataResult.length; i++) {
                    comment+='<div class="row" style="padding: 12px 0px 12px 0px; background-color: #f1f0f0; border-radius: 25px;"><div class="col-md-1"></div><div class="col-md-2"><figure class="profile-thumb-middle"><img src="'+dataResult[i]["user"]["profile_pic_path"]+'" alt="profile picture"></figure></div><div class="col-md-9" style="left:-20px;"><b>'+dataResult[i]["user"]["name"]+'</b><br>'+dataResult[i]["comment"]+'</div></div><br>'
                      // dataResult[i]
                  }
                  comment+="</div>";
                  $('#comment_show_body').empty();
                  $('#comment_show_body').append(comment);
                  console.log(comment);
                  $("#myModal").modal('show');
              }
              else{
                $('#comment_show_body').empty();
                $('#comment_show_body').append("no comments");
                
                  $("#myModal").modal('show');
              }
              }
          });
        
    });
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
                  var button;
                  $(id).empty();
                // console.log($(id).html());
                  var button="<button class='post-meta-like'><i onclick='like_blog("+val+")' value='"+val+"' class='fa fa-thumbs-up'> </i></button>"
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
                  var id="#icon_"+val;
                    let count="#count_"+val;
                  var button;
                  $(id).empty();
                
                  var button="<button class='post-meta-like'><i onclick='dislike_blog("+val+")' value='"+val+"' class='fa fa-thumbs-up' style='color: #dc4734;'> </i></button>"
               
                $(id).append(button);
                 var asd=parseInt($(count).html());
                asd=asd+1;
                $(count).empty();
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