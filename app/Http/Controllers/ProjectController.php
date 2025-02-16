<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $employees = Employee::all(); // ดึงพนักงานทั้งหมดจากฐานข้อมูล
        return view('projects.create', compact('employees')); // ส่ง $employees ไปยัง View
        //return view('projects.create');
    }

    // public function store(Request $request)
    // {
    //     Project::create($request->all());
    //     return redirect()->route('projects.index');
    //     //test
    //     $project = Project::create($request->except('employees')); // บันทึกข้อมูลโครงการ
    //     // เชื่อมโยงพนักงานกับโครงการ
    //     $project->employees()->sync($request->employees);
    //     return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    // }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'budget' => 'required|numeric',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'employees' => 'nullable|array', // ตรวจสอบว่าพนักงานเป็น array
        // 'employees.*' => 'exists:employees,id', // ตรวจสอบ id ของพนักงาน
    ]);

    // สร้างโปรเจค
    $project = Project::create([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'budget' => $validated['budget'],
        'start_date' => $validated['start_date'],
        'end_date' => $validated['end_date'],
    ]);

    // จัดการความสัมพันธ์กับพนักงาน
    if (!empty($validated['employees'])) {
        $project->employees()->sync($validated['employees']); // บันทึกพนักงานที่เลือก
    }

    return redirect()->route('projects.index')->with('success', 'Project created successfully!');
}


    public function edit(Project $project)
{
    $employees = Employee::all(); // ดึงพนักงานทั้งหมดจากฐานข้อมูล
    return view('projects.edit', compact('project', 'employees'));
}


    public function update(Request $request, Project $project)
    {
        // $project->update($request->all());
        // return redirect()->route('projects.index');

        $project->update($request->except('employees')); // อัปเดตข้อมูลโครงการ
        $project->employees()->sync($request->employees);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
