<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\Modelor;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    use Modelor, Uploader;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(20);

        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $user = User::create($validated);

        assert($user instanceof User, "Expected a user instance to be returned but got {$user} instead!");

        if ($request->hasFile('profile_photo')) {
            $filePath = $this->uploadImage($request->file('profile_photo'));
            $user->profile_photo = $filePath;
        }

        $user->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);

        assert($user instanceof User, "Expected a user instance to be returned but got {$user} instead!");

        return view('admin.users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        assert($user instanceof User, "Expected a user instance to be returned but got {$user} instead!");

        return view('admin.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        assert($user instanceof User, "Expected a user instance to be returned but got {$user} instead!");

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $this->updateModel($user, $validated, ['profile_photo']);

        if ($request->hasFile('profile_photo')) {
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            $filePath = $this->uploadImage($request->file('profile_photo'));
            $user->profile_photo = $filePath;
        }

        $user->save();

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        assert($user instanceof User, "Expected a user instance to be returned but got {$user} instead!");

        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
        }

        $user->signup()->delete();
        $user->roles()->detach();
        $user->groups()->detach();
        $user->attendances()->delete();

        return response(null);
    }
}
