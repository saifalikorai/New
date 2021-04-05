@extends('users.layouts.app')

@section('content')

    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                 <div class="col-lg-3 order-2 order-lg-1">
                    <!-- <aside class="widget-area">
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
                    </aside>  -->

                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                      
                        <!-- share box end -->

                        <!-- post status start -->









                        
<?php foreach($blog as $key => $value){
    //echo $value->title;
 ?>
                        <div class="card">
                            

                           <ul class="dropdown-msg-list">
                                                
                                                
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="assets/images/profile/profile-small-6.jpg" alt="profile picture">
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

                          
                        </div>

                         <?php }  ?>
                        <!-- post status end -->
                    </div> 
                </div>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div id="comment_show_body" class="modal-body">
     
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

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
                  for (var i = 0; i < dataResult.length; i++){
                    comment+='<div class="row"><div class="col-md-2"><figure class="profile-thumb-middle"><img src="'+dataResult[i]["user"]["profile_pic_path"]+'" alt="profile picture"></figure></div><div class="col-md-2">'+dataResult[i]["user"]["name"]+'</div><div class="col-md-8">'+dataResult[i]["comment"]+'</div></div>'
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
                  var id="#icon_"+val;
                    let count="#count_"+val;
                  var button;
                  $(id).empty();
                  var button="<button class='post-meta-like'><i onclick='dislike_blog("+val+")' value='"+val+"' class='fa fa-thumbs-up'> </i></button>"
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