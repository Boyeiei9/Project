<?php

namespace App\Http\Controllers;

use App\Models\Project; // นำเข้า Model Project
use Illuminate\Http\Request;

class UserProjectController extends Controller
{
    public function index()
{
    $projects = Project::all(); // ดึงโปรเจคทั้งหมด
    return view('user.index', compact('projects')); // เรียก view user/index
}

public function show($id)
{
    $project = Project::findOrFail($id); // ดึงข้อมูลโปรเจคตาม id
    return view('user.show', compact('project')); // เรียก view user/show
}

}
