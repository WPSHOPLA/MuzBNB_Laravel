<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Model\AdminProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => 'logout']);
    }
    public function home()
    {
        return view('admin.home');
    }
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.list',compact('admins'));
    }
    public function create()
    {
        $admin = Admin::where('id',auth()->guard('admin')->id())->firstOrFail();
        return view('admin.admins.admins_add',compact('admin'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $creator = auth()->guard('admin')->id();
        echo $creator;
        $admin = Admin::create(['status'=>true,'first_name'=>$request->first_name,'last_name'=>$request->last_name,'date_of_birth'=>$request->date_of_birth,'email'=>$request->email,'password'=>bcrypt($request->password),'role'=>$request->role,'creator_id'=> $creator]);

        if($admin)
        {
            return back();
        }
        return back()->withInput($request->only('first_name','last_name','email','date_of_birth'));
    }
    public function show($id)
    {
        $admin = Admin::where('id',$id)->firstOrFail();
        $profile = AdminProfile::where('admin_id',$id)->get()->first();
        return view('admin.admins.show',compact('admin','profile'));
    }
    public function edit($id)
    {
        $admin = Admin::where('id',auth()->guard('admin')->id())->firstOrFail();
        $user = Admin::where('id',$id)->firstOrFail();
        if($user->role!='Super' || $user->creator_id == auth()->guard('admin')->id() || $user->id == auth()->guard('admin')->id())
        {
            return view('admin.admins.admins_edit',compact('user','admin'));
        }
        else
        {
            return back();
        }



    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
        ]);
        $admin = Admin::where('id',$id)->firstOrFail();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->date_of_birth = $request->date_of_birth;
        $admin->email = $request->email;
        $admin->role = $request->role;
        $admin->status = $request->status;
        $admin->save();

        return back();
    }
    public function changePassword(Request $request)
    {
        $this->validate($request,[
            'user_id' =>'required',
            'password'=> 'required|min:6'
        ]);
        $user = Admin::where('id',$request->user_id)->firstOrFail();
        $user->password = bcrypt($request->password);
        $user->save();

        return back();
    }
    public function destroy($id)
    {
        Admin::where('id',$id)->firstOrFail()->delete();

        return back();
    }
    public function ban($id)
    {
        $user = Admin::where('id',$id)->firstOrFail();
        $user->status = false;
        $user->save();
        return back();
    }
    public function editProfile($id)
    {
        $admin = Admin::where('id',$id)->firstOrFail();
        $profile = AdminProfile::where('admin_id',$id)->get()->first();
        return view('admin.admins.edit',compact('admin','profile'));
    }
}
