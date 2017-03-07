<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
use App\User;

class UserController extends BaseController
{
    public function index()
    {
        $users = User::latest()->get();

        return $this->view('user.index', compact('users'));
    }

    public function create()
    {
        return $this->view('user.create');
    }

    public function createRole()
    {
        $roles = Role::all();

        return $this->view('post.create-role', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        Role::create($request->only(['name', 'display_name', 'description']));

        return redirect(route('dashboard:post.role.create'))->withSuccess('Successfuly created new role');
    }

    public function addPermission(Role $role, Request $request)
    {
        $permission = Permission::create($request->only(['name', 'description', 'display_name']));

        $role->attachPermission($permission);

        return response([
            'message' => 'Successfuly attach permission',
            'permission' => $permission,
            'role' => $role,
        ]);
    }

}
