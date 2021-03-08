<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Post;
use App\Model\FriendRequest;
use App\Model\FriendList;

use Auth;
use DB;

class BlogController extends Controller
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

        $blog = DB::table('blogs')->get();

       // print_r($blog);

          
        //exit();
        
        return view('users.blog.blog', compact('person', 'post', 'friend', 'friends', 'blog'));
    }


    public function blogInsert(Request $request)
    {
       
        echo $userid = Auth::user()->id;
        echo $caption = $request->caption;
        echo $title = $request->title;

         $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
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

          //return redirect('/blog')->with($request->session()->flash('status', 'Task was successful!'));
          return redirect()->route('blog')->with('success1', 'Post Created Successfully');
        }

        //echo "string";      
    }


    public function AjaxMass()
    {
      echo "working";
    }




}
