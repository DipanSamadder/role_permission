<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//use Auth;

class HomeController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {

        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        // $role = Role::findById(3);
        // $permission = Permission::findById(7);
        // $role->revokePermissionTo($permission);
        auth();
       // auth()->user()->givePermissionTo('Add User');

    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
