<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Permission;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions=Permission::all();
        return view('panel.permissions.show',compact('permissions'));
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
                'name' => ['required', 'string', 'max:255', 'unique:permissions'],
                'description' => ['required', 'string', 'max:255']
            ]);
            Permission::create($data);
        }

        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Permission $permission)
    {
        if($request->ajax()){

            return response()->json($permission);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        if($request->ajax()){
            $data=$request->validate([
                'name' => ['required', 'string', 'max:255', Rule::unique('permissions')->ignore($permission->id)],
                'description' => ['required', 'string', 'max:255']
                ]);
                $permission->update($data);
                // return json_encode(array('statusCode'=>200));
                return response()->json(Permission::all());


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back();
    }
}
