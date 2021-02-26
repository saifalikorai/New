<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Model\FriendRequest;
use App\Model\FriendList;
use App\Model\Post;
use App\Model\PostsFile;
use Auth;
use DB;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();
        
        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();

        return view('users.profile.timeline', compact('person' , 'friend', 'friends'));
    }

    public function friend(Request $request)
    {
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();

        return view('users.profile.friend', compact('person', 'friend', 'friends'));
    }

    public function photo(Request $request)
    {
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();

        // $photo = PostsFile::where('post_id', function($q){
        //     $q->select('id')->where('user_id', Auth::id())->from('users');
        // })->get();
        
        return view('users.profile.photo', compact('person', 'friend', 'friends', 'photo'));
    }

    public function person(Request $request, $id)
    {
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $user = User::where('id', $id)->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();
        
        return view('users.profiles.timelines', compact('person', 'user', 'friend', 'friends'));
    }

    public function person_photos(Request $request, $id)
    {
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $user = User::where('id', $id)->get();

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();
        
        return view('users.profiles.photos', compact('person', 'user', 'friend', 'friends'));
    }

    public function setting()
    {
        $person = DB::table('users')->whereNotIn('id', function($q){
            $q->select('id')->where('id', Auth::id())->from('users');
        })->whereNotIn('id', function($q){
            $q->select('friend_id')->where('user_id', Auth::id())->from('friend_lists');
        })->get();

        $user = User::find(Auth::id());

        $friend = FriendRequest::with('suser')->where('user2_id', Auth::user()->id)->where('response', 'pending')->get();

        $friends = FriendList::with('suser')->where('user_id', Auth::user()->id)->get();
        
        return view('users.profile.setting', compact('person', 'user', 'friend', 'friends'));

    }

    public function saveSetting(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'description' => 'required',
            'password' => 'required',
        ]);

        if(Hash::check($request->password, Auth::user()->password)) {
            User::find(Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'birthdate' => $request->birthdate,
                'description' => $request->description,
            ]);
    
            return redirect()->route('setting')->with('success', 'Profile Updated Successfully');
        }
        else{
            return back()->withErrors(['error' => 'Incorrect Password']);
        }
    }

    public function savePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'old_password' => 'required',
        ]);

        if(Hash::check($request->old_password, Auth::user()->password)) {
            User::find(Auth::id())->update([
                'password' => Hash::make($request->password),
            ]);
    
            return redirect()->route('setting')->with('success', 'Password Updated Successfully');
        }
        else{
            return back()->withErrors(['error' => 'Incorrect Old Password']);
        }
    }
    
    public function savePicture(Request $request)
    {
        $this->validate($request, [
            'picture' => 'image|max:2000|mimes:jpeg,png,gif',
        ]);

        if($request->hasFile('picture')){
            
            $user = User::find(Auth::id());

            if($user->profile_pic_path != null){
                $path = public_path()."/images/".$user->picture;
                unlink($path);
            }

            $profile_pic = $request->file('picture')->store('profile');
            
            User::find(Auth::id())->update([
                'profile_pic_path' => $profile_pic,
            ]);

            return redirect()->route('setting')->with('success', 'Profile Picture Updated Successfully');
        }
        else{
            return back()->withErrors(['error' => 'Something went wrong']);

        }
    }
}
