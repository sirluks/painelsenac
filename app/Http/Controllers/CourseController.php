<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Course::all()->where('Estado da Turma', "Liberado Para Matrícula" );
        
        return view('courses', ['turmas' => $turmas]);
    }

    /**
     * Show the form for creating a new resource.
     */    
    public function show(string $id)
    {
        $turma = Course::where('Código da Turma', $id)->firstOrFail()->toArray();
        return view('course', ['turma' => $turma]);
    }

    /**
     * Show the form for editing the specified resource.
     */    
}
