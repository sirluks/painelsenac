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
        $turmas = Course::all()->where('Código da Turma', $id);       
        return view('course', ['turmas' => $turmas]);
    }

    /**
     * Show the form for editing the specified resource.
     */    
}
