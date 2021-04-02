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


   public function index(Request $request){ 
   	 $senderId = $request->senderId;
   	 $receiverId = $request->receiverId;
//$users = DB::select('select * from chats where active = ');
  ?> 
  <div class="live-chat-inner">
    <div class="chat-output-box">
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
            <p>Many desktop publishing packages and web page editors</p>
            <div class="message-time">5 minute ago</div>
          </li>
        </ul>
      </div>
      <form action="javascript:void(0)" method="post">
        <input type="text" id="textMessages" name="usrname">&nbsp;<input type="submit" placeholder="Send" value="send" id="sendMessage">
        <input type="hidden" id="receiverId" value="<?php echo $receiverId; ?>">
        <input type="hidden" id="senderId" value="<?php echo $senderId; ?>">
      </form>
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

  
 <div class="live-chat-inner">
    <div class="chat-output-box">
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
            <p><?php echo $textMessages; ?>   </p>
            <div class="message-time">5 minute ago</div>
          </li>
        </ul>
      </div>
      <form action="javascript:void(0)" method="post">
        Name: <input type="text" id="textMessages"  name="usrname">
        <input type="hidden" id="receiverId" value="<?php echo $receiverId; ?>">
        <input type="hidden" id="senderId" value="<?php echo $senderId; ?>">
        <input type="submit" id="sendMessage">
      </form>
    </div>
  </div>
  

       
<?php
   
   }
}