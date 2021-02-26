<?php

namespace App\Http\Controllers;

use App\Model\FriendList;
use App\Model\FriendRequest;
use Illuminate\Http\Request;

use Auth;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getFriend(Request $request)
    {
        $friend = FriendRequest::where('user1_id', Auth::user()->id)->where('user2_id',$request->user)->get();

        if(count($friend) > 0){
            if($friend[0]->response == "accepted" ){
                $status = null;
                $text = 'remove friend';
            }
            else{
                $status = false;
                $text = 'cancel request';
            }
        }
        else{
            $friend2 = FriendRequest::where('user1_id', $request->user)->where('user2_id', Auth::user()->id)->get();
            if(count($friend2) > 0){
                if($friend2[0]->response == "accepted" ){
                    $status = null;
                    $text = 'remove friend';
                }
                else{
                    $status = 'pending';
                    $text = 'confirm';
                }
            }
            else{
                $status = true;
                $text = 'add friend';
            }
        }
        
        return response()->json([
            'status' => $status,
            'text' => $text,
        ]);
    }

    public function sendRequest(Request $request)
    {
        FriendRequest::create([
            'user1_id' => Auth::user()->id,
            'user2_id' => $request->user,
            'response' => 'pending',
        ]);

        return response()->json([
            'message'=>'Friend Request Send!',
            'text'=>'cancel request',
            'status'=> false,
        ]);
    }

    public function cancelRequest(Request $request)
    {
        FriendRequest::where('user1_id', Auth::user()->id)->where('user2_id', $request->user)->delete();

        return response()->json([
            'message' => 'Friend Request Cancelled!',
            'text' => 'add friend',
            'status' => true,
        ]);
    }

    public function acceptRequest(Request $request)
    {
        $friend = FriendRequest::where('user1_id', $request->user)->where('user2_id', Auth::user()->id)->update([
            'response' => 'accepted',
        ]);

        if($friend){

            FriendList::create([
                'user_id' => $request->user,
                'friend_id' => Auth::user()->id,
            ]);

            FriendList::create([
                'user_id' => Auth::user()->id,
                'friend_id' => $request->user,
            ]);

            return response()->json([
                'message'=>'Friend Request Accepted!',
            ]);
        }

        else{
            return response()->json([
                'message'=> $friend,
            ]);
        }
    }

    public function rejectRequest(Request $request){
        
        FriendRequest::where('user2_id', Auth::user()->id)->where('user1_id', $request->user)->delete();

        return response()->json([
            'message' => 'Request Rejected!',
            'text' => 'add friend',
            'status' => true,
        ]);
    }

    public function removeFriend(Request $request)
    {
        FriendList::where('user_id', Auth::user()->id)->where('friend_id', $request->user)->delete();
        FriendList::where('friend_id', Auth::user()->id)->where('user_id', $request->user)->delete();

        FriendRequest::where('user1_id', Auth::user()->id)->where('user2_id', $request->user)->delete();
        FriendRequest::where('user2_id', Auth::user()->id)->where('user1_id', $request->user)->delete();

        return response()->json([
            'message' => 'Friend Removed!',
            'text' => 'add friend',
            'status' => true,
        ]);
    }
}
