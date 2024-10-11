<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentAttendance;
use App\Traits\Modelor;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{
    use Modelor;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = StudentAttendance::paginate(20);

        return view('admin.student-attendances.index', [
            'attendances' => $attendances,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.student-attendances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|numeric|exists:users,id',
            'attendance_status_id' => 'required|numeric|exists:attendance_statuses,id',
            'attendance_date' => 'required|date',
        ]);

        StudentAttendance::create($validated);

        return redirect()->route('admin.student-attendances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $attendance = StudentAttendance::findOrFail($id);

        assert($attendance instanceof StudentAttendance, "Expected a school instance to be returned but got {$attendance} instead!");

        return view('admin.student-attendances.show', [
            'attendance' => $attendance,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $attendance = StudentAttendance::findOrFail($id);

        assert($attendance instanceof StudentAttendance, "Expected a school instance to be returned but got {$attendance} instead!");

        return view('admin.student-attendances.edit', [
            'attendance' => $attendance,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $attendance = StudentAttendance::findOrFail($id);

        assert($attendance instanceof StudentAttendance, "Expected a school instance to be returned but got {$attendance} instead!");

        $validated = $request->validate([
            'user_id' => 'nullable|numeric|exists:users,id',
            'attendance_status_id' => 'nullable|numeric|exists:attendance_statuses,id',
            'attendance_date' => 'nullable|date',
        ]);

        $this->updateModel($attendance, $validated);

        return redirect()->route('admin.student-attendances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $attendance = StudentAttendance::findOrFail($id);

        assert($attendance instanceof StudentAttendance, "Expected a school instance to be returned but got {$attendance} instead!");

        $attendance->delete();

        return response(null);
    }
}
