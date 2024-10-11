<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\Modelor;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    use Modelor, Uploader;

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit()
    {
        return view('admin.settings.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'org_name' => 'nullable|string|max:255',
            'org_slug' => 'nullable|string|max:255',
            'org_slogan' => 'nullable|string|max:255',
            'org_desc' => 'nullable|string',
            'org_logo' => 'nullable|image|max:10240|mimes:jpeg,jpg,png',
        ]);

        if ($request->has('org_logo')) {
            $setting = Setting::StrictByName('org_logo')->first();

            if ($setting->value) {
                Storage::disk('public')->delete($setting->value);
            }

            $filePath = $this->uploadImage($request->file('org_logo'));
            $setting->value = $filePath;
            $setting->save();

            unset($validated['org_logo']);
        }

        foreach ($validated as $key => $value) {
            $this->updateKey($key, $value);
        }

        return redirect()->route('admin.settings');
    }

    /**
     * Updates a setting key
     */
    public function updateKey(string $key, mixed $value): bool
    {
        $setting = Setting::StrictByName($key)->first();

        if (! $setting || $value === null) {
            return false;
        }

        $setting->value = $value;
        $setting->save();

        return true;
    }
}
