<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Traits\Modelor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::paginate(20);

        return view('admin.roles.index', [
            'roles' => $roles,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $role = Role::findOrFail($id);

        assert($role instanceof Role, "Expected a role instance to be returned but got {$role} instead!");

        return view('admin.roles.show', [
            'role' => $role->id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $role = Role::findOrFail($id);

        assert($role instanceof Role, "Expected a role instance to be returned but got {$role} instead!");

        return view('admin.roles.edit', [
            'role' => $role->id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $role = Role::findOrFail($id);

        assert($role instanceof Role, "Expected a role instance to be returned but got {$role} instead!");

        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255', Rule::unique('roles', 'name')->ignore($role->id)],
        ]);

        $this->updateModel($role, $validated);

        return redirect()->route('admin.roles.index');
    }
}
