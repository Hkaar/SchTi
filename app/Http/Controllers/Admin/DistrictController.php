<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Traits\Modelor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DistrictController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $districts = District::paginate(20);

        return view('admin.districts.index', [
            'districts' => $districts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.districts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:districts,name',
            'city_id' => 'required|numeric|exists:cities,id',
        ]);

        District::create($validated);

        return redirect()->route('admin.districts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $district = District::findOrFail($id);

        return view('admin.districts.show', [
            'district' => $district,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $district = District::findOrFail($id);

        return view('admin.districts.edit', [
            'district' => $district,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $district = District::findOrFail($id);

        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255', Rule::unique('districts', 'name')->ignore($district->id)],
            'city_id' => ['nullable', 'numeric', 'exists:cities,id'],
        ]);

        $this->updateModel($district, $validated);

        return redirect()->route('admin.districts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $district = District::findOrFail($id);

        $district->signups()->delete();
        $district->delete();

        return response(null);
    }
}
