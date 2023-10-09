<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */    
    public function show(string $id)
    {
        $turma = Course::all()->where('Código da Turma', $id);
        dd($turma);
    }

    /**
     * Show the form for editing the specified resource.
     */
}
