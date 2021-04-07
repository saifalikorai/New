<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Post;
use App\Model\FriendRequest;
use App\Model\FriendList;
use App\Model\Blog;
use App\Model\BlogLike;
use App\Model\BlogComment;

use Auth;
use DB;

class Notification extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
        $post = Post::with(['user', 'files'])->orderBy('created_at', 'desc')->get();
       
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();

        $blog = Blog::with('like','comment','user')->orderBy('created_at','desc')->get()->toArray();
        // echo "<pre>";print_r($blog);die();
        $i=0;
        
        foreach ($blog as $value){
         $like_array = $value['like'];
         $blog[$i]['my_like'] = false;
         if(!empty($like_array)){
          foreach ($like_array as $value1) {
            if($value1['user_id']==Auth::user()->id){
              $blog[$i]['my_like']=true;
            }
          }
         }
        
         $i++;
      }


       $notification = DB::table('users')
           ->select('users.name', 'users.email')
           ->join('blogs_likes', 'blogs_likes.user_id', '=', 'users.id')
           ->get();
//exit();
        
        return view('users.notification', compact('person', 'post', 'friend', 'friends', 'blog','notification'));
    }
   

    public function showallcomment(Request $req)
    {
      $blog_id=$req['blog_id'];

      $comment = BlogComment::with('user')->where('blog_id',$blog_id)->orderBy('created_at','desc')->get()->toArray();
      return $comment;
    }


    public function blogInsert(Request $request)
    {
       
        echo $userid = Auth::user()->id;
        echo $caption = $request->caption;
        echo $title = $request->title;

         $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/blog');
        $image->move($destinationPath, $image_name);
    }



      $resulte = DB::table('blogs')->insert([
                    'user_id' => $userid,
                    'title' => $title,
                    'tag_line' => $caption,
                    'image' => $image_name


        ]);

        if ($resulte){

          //return redirect('/blog')->with($request->session()->flash('status', 'Task was successful!'));
          return redirect()->route('blog')->with('success1', 'Post Created Successfully');
        }
        
         
    }


    

    public function insert_comment(Request $request)
    {
        
        //return $request;
        echo $userid = Auth::user()->id;
        echo $comment = $request->comment;
        echo $blog_id = $request->blog_id;
        
//exit();
        $resulte = DB::table('blogs_comments')->insert([
                    'user_id' => $userid,
                    'blog_id' => $blog_id,
                    'comment' => $comment
                    


        ]);

        if ($resulte){

          //echo ("hello");

          return redirect('/blog')->with($request->session()->flash('status', 'Task was successful!'));
         // return redirect()->route('blog')->with('success1', 'Post Created Successfully');
        }

        //echo "string";      
    }


    public function AjaxMass()
    {
      echo "working";
    }


    public function likeblog(Request $req)
    {
        // die($req->blog_id);
        $blog_id=$req->blog_id;
        $user_id=Auth::user()->id;

        // $like=BlogLike::insert($user_id,$blog_id,"like");
        //return $like;
         $result = DB::table('blogs_likes')->insert([
                    'user_id' => $user_id,
                    'blog_id' => $blog_id,
                    'is_liked' => 'like',

        ]);
         return "true";

    }

    public function dislikeblog(Request $req)
    {
        // die($req->blog_id);
        $blog_id=$req->blog_id;
        $user_id=Auth::user()->id;

        // $like=BlogLike::find(1)->where('user_id','=',$user_id);
        //return $like;
         $result = BlogLike::where('user_id', $user_id)->where('blog_id',$blog_id)->delete();
         return "true";

    }




}
