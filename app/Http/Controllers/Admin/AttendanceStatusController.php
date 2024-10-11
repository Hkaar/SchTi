<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttendanceStatus;
use App\Traits\Modelor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AttendanceStatusController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = AttendanceStatus::paginate(20);

        return view('admin.attendance-statusese.index', [
            'statuses' => $statuses,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $status = AttendanceStatus::findOrFail($id);

        return view('admin.attendance-statuses.show', [
            'status' => $status,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $status = AttendanceStatus::findOrFail($id);

        return view('admin.attendance-statuses.edit', [
            'status' => $status,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $status = AttendanceStatus::findOrFail($id);
        
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:255', Rule::unique('attendance_statuses', 'name')->ignore($status->id)],
        ]);

        $this->updateModel($status, $validated);

        return redirect()->route('admin.attendance-statuses.index');
    }
}
