<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();
        $permissions=Permission::all();
        return view('panel.roles.show',compact('roles','permissions'));
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
        if($request->ajax()) {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255', 'unique:roles'],
                'description' => ['required', 'string', 'max:255'],
                'permissions'=>['required','array']
            ]);
            $role=Role::create($data);
            $role->permissions()->sync($data['permissions']);
            
        }

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Role $role)
    {
        if($request->ajax()){

            return response()->json([$role,$role->permissions->pluck('id','name')]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        if($request->ajax()){
            $data=$request->validate([
                'name' => ['required', 'string', 'max:255', Rule::unique('roles')->ignore($role->id)],
                'description' => ['required', 'string', 'max:255']
            ]);
            $role->update($data);
            // return json_encode(array('statusCode'=>200));
            return response()->json(Role::all());


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
