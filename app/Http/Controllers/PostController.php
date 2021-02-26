<?php

namespace App\Http\Controllers;

use App\Model\Post;
use App\Model\PostsFile;
use App\Model\PostsLike;
use App\Model\PostsComment;
use App\Model\FriendRequest;
use App\Model\FriendList;
use Illuminate\Http\Request;

use Auth;
use DB;

class PostController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $this->validate($request, [
            'caption' => 'required',
            'picture.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'caption' => $request->caption,
        ]);

        if($request->hasFile('picture')){
            
            foreach($request->file('picture') as $image)
            {
                $file_path = $image->store('post');

                PostsFile::create([
                    'post_id' => $post->id,
                    'file_path' => $file_path,
                ]);
            }
        }

        return redirect()->route('home')->with('success', 'Post Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with(['user', 'files'])->where('id', $id)->get();

        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();

        return view('users.post.post', compact('post', 'person', 'friend', 'friends'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::find($request->post_id);

        PostsLike::where('post_id', $request->post_id)->delete();
        PostsFile::where('post_id', $request->post_id)->delete();
        PostsComment::where('post_id', $request->post_id)->delete();

        $post->delete();

        return redirect()->route('home')->with('success', 'Post Deleted Successfully');
    }

    public function share(Request $request)
    {
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'caption' => $request->caption,
            'original_post_id' => $request->post_id,
            'original_poster_id' => $request->owner,
        ]);

        Post::find($post->id)->update([
            'isShared' => true,
        ]);

        Post::find($request->post_id)->update([
            'no_of_shares' => $request->no_shares+1,
        ]);

        return redirect()->route('home')->with('success', 'Post Shared Successfully');
    }

    public function getlike(Request $request)
    {
        $post = PostsLike::where('post_id', $request->post)->count();

        $var = PostsLike::where('post_id', $request->post)->where('user_id', $request->user)->count();

        if($var == 0){
            $icon = 'fa fa-heart-o';
        }
        else{
            $icon ='fa fa-heart';
        }

        return response()->json([
            'post'=>$post,
            'icon'=>$icon,
        ]);
    }
    public function like(Request $request)
    {
        $var = PostsLike::where('post_id', $request->post)->where('user_id', $request->user)->count();

        if($var == 0){
            PostsLike::create([
                'post_id' => $request->post,
                'user_id' => $request->user,
            ]);
    
            return response()->json([
                'message'=>'Post Liked!',
            ]);
        }
        else{
            PostsLike::where('post_id', $request->post)->where('user_id', $request->user)->delete();

            return response()->json([
                'message'=>'Post UnLiked!',
            ]);
        }   
    }

    public function getcomment(Request $request)
    {
        $comments = PostsComment::with('user')->where('post_id',$request->post)->get();

        return response()->json([
            'comments'=>$comments,
        ]);
    }

    public function getcommentmin(Request $request)
    {
        $comments = PostsComment::with('user')->where('post_id',$request->post)->latest()->take(1)->get();

        // $comments = DB::table('items')->latest()->first();

        return response()->json([
            'comments'=>$comments,
        ]);
    }

    public function getCount(Request $request){
        $count = PostsComment::where('post_id',$request->post)->count();

        return response()->json([
            'count'=>$count,            
        ]);
    }

    public function comment(Request $request){
        PostsComment::create([
            'post_id' => $request->post,
            'user_id' => $request->user,
            'comment' => $request->comment,
        ]);

        return response()->json([
            'message'=>'Comment Posted!',
        ]);
    }
}
