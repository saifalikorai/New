<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Auth;
use Response;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function checkPermission() {
        // if(auth()->user()->hasRole('admin'))
            return true;
        // else
        //     return false;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!$this->checkPermission())
            return redirect('home');

        $user = User::all();
        
        return view('admin.user.user_list', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$this->checkPermission())
            return redirect('home'); 
        
        $user = User::find($id);
        return Response::json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->checkPermission())
            return redirect('home');

        $user = User::find($id);
        return Response::json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$this->checkPermission())
            return redirect('home');

        $this->validate($request,[ 
            'name' => 'required|string|max:250',
            'email' => 'required|string|max:250',
            'role_id' => 'required',
            'username' => 'required|string|max:250',
            'image' => 'image|max:2000|mimes:jpeg,png,gif',
        ]);

        if($request->image){

            $image = $request->file('image')->store('users');

            User::find($request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'username' => $request->username,
                'birthdate' => $request->birthdate,
                'followers' => $request->followers,
                'following' => $request->following,
                'no_of_blogs' => $request->no_of_blogs,
                'description' => $request->description,
                'image' => $image,
            ]);
        }
        else{
            User::find($request->user_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'role_id' => $request->role_id,
                'username' => $request->username,
                'birthdate' => $request->birthdate,
                'followers' => $request->followers,
                'following' => $request->following,
                'no_of_blogs' => $request->no_of_blogs,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('user.index')->with('success','Record Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if(!$this->checkPermission())
            return redirect('home');
        
        $user = User::find($request->user_id);

        if($user->image != null){
            $path = public_path()."/images/".$user->image;
            unlink($path);
        }
        
        $user->delete();

        return redirect()->route('user.index')->with('success','Record Deleted Successfully');
    }
}