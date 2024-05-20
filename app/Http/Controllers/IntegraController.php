<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Integra;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IntegraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('pages.index');
    }

    public function grade(Request $request): View
    {
        $courses = Course::all();
        return view('pages.grade', compact('courses'));
    }

    public function mural(): View
    {
        return view('pages.mural');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Integra $integra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Integra $integra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Integra $integra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integra $integra)
    {
        //
    }
}
