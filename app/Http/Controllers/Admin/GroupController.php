<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Traits\Modelor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::paginate(20);

        return view('admin.groups.index', [
            'groups' => $groups,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:groups,name',
        ]);

        Group::create($validated);

        return redirect()->route('admin.groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $group = Group::findOrFail($id);

        assert($group instanceof Group, "Expected a group instance to be returned but got {$group} instead!");

        return view('admin.groups.show', [
            'group' => $group,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $group = Group::findOrFail($id);

        assert($group instanceof Group, "Expected a group instance to be returned but got {$group} instead!");

        return view('admin.groups.edit', [
            'group' => $group,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $group = Group::findOrFail($id);

        assert($group instanceof Group, "Expected a group instance to be returned but got {$group} instead!");

        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255', Rule::unique('groups', 'name')->ignore($group->id)],
        ]);

        $this->updateModel($group, $validated);

        return redirect()->route('admin.groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $group = Group::findOrFail($id);

        assert($group instanceof Group, "Expected a group instance to be returned but got {$group} instead!");

        $group->users()->detach();
        $group->delete();

        return response(null);
    }
}
