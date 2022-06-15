<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function store(Request $request)
    {
        Student::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas
        ]);

        return redirect('/students');
    }
}
