<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use App\Traits\Modelor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SchoolController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::paginate(20);

        return view('admin.schools.index', [
            'schools' => $schools,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:schools,name',
        ]);

        School::create($validated);

        return redirect()->route('admin.schools.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $school = School::findOrFail($id);

        assert($school instanceof School, "Expected a school instance to be returned but got {$school} instead!");

        return view('admin.schools.show', [
            'school' => $school,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $school = School::findOrFail($id);

        assert($school instanceof School, "Expected a school instance to be returned but got {$school} instead!");

        return view('admin.schools.edit', [
            'school' => $school,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $school = School::findOrFail($id);

        assert($school instanceof School, "Expected a school instance to be returned but got {$school} instead!");

        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255', Rule::unique('schools', 'name')->ignore($school->id)],
        ]);

        $this->updateModel($school, $validated);

        return redirect()->route('admin.schools.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $school = School::findOrFail($id);

        assert($school instanceof School, "Expected a school instance to be returned but got {$school} instead!");

        $school->signups()->delete();
        $school->delete();

        return response(null);
    }
}
