<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Model\Post;
use App\Model\FriendRequest;
use App\Model\FriendList;

use Auth;
use DB;

class messageController extends Controller {



   public function index(Request $request) {



   	
   	  $senderId = $request->senderId;
   	 $receiverId = $request->receiverId;

     // $comments = DB::table('chats')->where('receiver_id', '=', 1)->get();

       $res = DB::table('chats')->where('receiver_id',$receiverId )->get();



    
     // echo $name->chat_message;
     /*return $res = DB::table('chats')->where('receiver_id', $receiverId);*/
           //  exit();   
        
?>
      <div class="live-chat-inner">
    <div class="chat-output-box show">
      <div class="live-chat-title">
        <div class="profile-thumb active">
          <a href="#">
            <figure class="profile-thumb-small">
              <img src="{{asset('images/profile/profile-small-5.jpg')}}" alt="profile picture">
            </figure>
          </a>
        </div>
        <div class="posted-author">
          <h6 class="author"><a href="">Robart Marloyan</a></h6>
          <span class="active-pro">active now</span>
        </div>
      </div>
   <div class="message-list-inner">
        <ul class="message-list custom-scroll">
          <li class="text-author">
           <?php  $res = DB::table('chats')->where('receiver_id',$receiverId )->get(); foreach ( $res  as $name) { 
             ?> <p><?php echo $name->chat_message; ?></p> <?php } ?>
            <div class="message-time">1 mins ago</div>
          </li>
        </ul>
      </div>
  
      
    </div>
  </div>
  <?php
  
 
     
   }






   public function sendMessagee(Request $request){

   //echo $userid = "string";

      echo $senderId = $request->senderId;
      echo $receiverId = $request->receiverId;
       echo $textMessages = $request->textMessages;


    $resulte = DB::table('chats')->insert([
                    'sender_id' => $senderId,
                    'receiver_id' => $receiverId,
                    'chat_message' => $textMessages                    


        ]);

?>

  

       
<?php
   
   }



   public function tests(){

  $res = DB::table('chats')->where('receiver_id', 1)->get();

    foreach ($res as $name) {
    echo $name->chat_message;
}


  //  echo "string";
      }

}