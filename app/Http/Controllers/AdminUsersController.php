<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\User;
// use App\UserEditRequest;
use App\Http\Requests\UsersEditRequest;
use App\Role;
use App\Photo;
use App\Http\Requests; 
use DB;
// use Redirect,Response,DB,Config;
// use Datatables;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index' ,compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->all();
        // $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //use to check request first
        // User::create($request->all());
         // return redirect('/admin/users');
        // displaying if photo exist
        // if($request->file('photo_id')){

        //     return 'photo exist';
        //     // return redirect('/admin/users');
        // }
        
        if(trim($request->password) == ''){
            $input = $request->except('password');
            } else{
            
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }
        
        if($file =  $request->file('photo_id')){

                $name = time() .$file->getClientOriginalName();

                $file->move('img' , $name);

                $photo = Photo::create(['path'=>$name]);

                $input['photo_id'] = $photo->id;
 
            }

            $input['password'] = bcrypt($request->password);
              User::create($input);  
            
            return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return view('admin.users.show');
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
        $user = User::findOrFail($id);
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit' , compact('user' , 'roles'));
    }
//  , 'roles'
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        // to check for empty password
        if(trim($request->password) == ''){
            $input = $request->except('password');
            } else{
            
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        if($file =  $request->file('photo_id')){

            // $name = time() .$file->getClientOriginalName();
            $name = time() .$file->getClientOriginalName();
            
            $file->move('img' , $name);

            $photo = Photo::create(['path'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $user->update($input);

        return redirect('/admin/users');

        // to avoid having to input password all the time/ create a new request

        // first thing to do
        // return $request->all();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // return "deleted joor";

        $user = User::findOrFail($id);
        // unlink(public_path('storage/img/delete'));
        // Storage::disk('s3')->delete('folder_path/file_name.jpg');
        // unlink(public_path(). $user->photo->path);
        // unlink(public_path(). '/img/'. $user->photo->path );
        $user->delete();
        Session::flash('deleted_user', 'User was Successfully Deleted');
        return redirect('/admin/users');
    }


    // public function deleteUser(Request $request){

    //     // dd($request);
    //     return "hold on";

    // }
}
