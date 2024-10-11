<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerShip;
use App\Traits\Modelor;
use App\Traits\Uploader;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PartnerShipController extends Controller
{
    use Modelor, Uploader;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnerships = PartnerShip::paginate(20);

        return view('admin.partnerships.index', [
            'partnerships' => $partnerships,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partnerships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:partnerships,name',
            'email' => 'required|email|max:255|unique:partnerships,email',
            'phone' => 'required|string|max:100',
            'address' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $partnership = new PartnerShip;
        $partnership->fill($validated);

        if ($request->hasFile('logo')) {
            $filePath = $this->uploadImage($request->file('logo'));
            $partnership->logo = $filePath;
        }

        $partnership->save();

        return redirect()->route('admin.partnerships.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $partnership = PartnerShip::findOrFail($id);

        assert($partnership instanceof PartnerShip, "Expected a partnership instance to be returned but got {$partnership} instead!");

        return view('admin.partnerships.show', [
            'partnership' => $partnership,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $partnership = PartnerShip::findOrFail($id);

        assert($partnership instanceof PartnerShip, "Expected a partnership instance to be returned but got {$partnership} instead!");

        return view('admin.partnerships.edit', [
            'partnership' => $partnership,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $partnership = PartnerShip::findOrFail($id);

        assert($partnership instanceof PartnerShip, "Expected a partnership instance to be returned but got {$partnership} instead!");

        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255', Rule::unique('partnerships', 'name')->ignore($partnership->id)],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('partnerships', 'email')->ignore($partnership->id)],
            'phone' => 'nullable|string|max:100',
            'address' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $this->updateModel($partnership, $validated, ['logo']);

        if ($request->hasFile('logo')) {
            $filePath = $this->uploadImage($request->file('logo'));
            $partnership->logo = $filePath;
        }

        $partnership->save();

        return redirect()->route('admin.partnerships.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $partnership = PartnerShip::findOrFail($id);

        assert($partnership instanceof PartnerShip, "Expected a partnership instance to be returned but got {$partnership} instead!");

        $partnership->delete();
        
        return response(null);
    }
}
