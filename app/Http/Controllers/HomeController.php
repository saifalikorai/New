<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Post;
use App\Model\FriendRequest;
use App\Model\FriendList;

use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $post = Post::with(['user', 'files'])->orderBy('created_at', 'desc')->get();
        // Post::all()
      //  dd(Post::farhan());
        // @dd($post[4]['files']);
        /*echo "<pre>";
        print_r($post);
        echo "<pre>";
        exit();*/
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();
        
        return view('users.index', compact('person', 'post', 'friend', 'friends'));
    }
}
