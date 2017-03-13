<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.list',compact('users'));
    }
    public function create()
    {
        return view('admin.users.users_add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if($request->status==null)
        {
            $request->status = 0;
        }
        else
        {
            $request->status = 1;
        }

        echo $request->status;

        $user = User::create(['name'=>$request->name,'email'=>$request->email,'password'=>bcrypt($request->password),'verified'=>$request->status]);
        if($user)
        {
            return redirect()->route('admin.user.list');
        }
        return back()->withInput($request->only(['name','email','status']));
    }
    public function edit($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        return view('admin.users.users_edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user = User::where('id',$id)->firstOrFail();
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->verified = $request->status;
        $user->save();

        return back();
    }
    public function changePassword(Request $request)
    {
        $this->validate($request,[
            'user_id' =>'required',
            'password'=> 'required|min:6'
        ]);
        $user = User::where('id',$request->user_id)->firstOrFail();
        $user->password = bcrypt($request->password);
        $user->save();

        return back();
    }
    public function destroy($id)
    {
        User::where('id',$id)->firstOrFail()->delete();

        return back();
    }
    public function ban($id)
    {
        $user = User::where('id',$id)->firstOrFail();
        $user->verified = 0;
        $user->save();
        return back();
    }
}
