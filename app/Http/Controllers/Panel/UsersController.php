<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $roles=Role::all();
        $permissions=Permission::all();
        return view('panel.users.show',compact('users','roles','permissions'));
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,User $user)
    {
        if($request->ajax()){
            return response()->json([$user,$user->permissions->pluck('id','name'),$user->roles->pluck('id','name')]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->ajax()){
            $data=$request->validate([
                'name' => ['required', 'string', 'max:255'],
//                'description' => ['required', 'string', 'max:255'],
                'users'=>['required'],
                'email'=>['required'],
                'roles'=>['required','array']
            ]);
//            $role->update($data);
//            $role->permissions()->sync($data['permissions']);
            // return json_encode(array('statusCode'=>200));
            $user=User::where('email',$data['email'])->first();

            if($data['users'] != 0){
                $user->is_staff=1;
                $user->roles()->sync($data['roles']);
            }else{
                $user->is_staff=0;
                $user->roles()->detach();
            }
            $user->name=$data['name'];
            if(!empty($request->password)){
                $user->password=Hash::make($data['password']);
            }
            $user->save();

            return response()->json(Role::all());


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
