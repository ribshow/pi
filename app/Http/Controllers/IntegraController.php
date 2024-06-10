<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Integra;
use App\Models\UserType;
use App\Models\User;
use App\Models\Room;
use App\Models\Blocks;
use App\Models\Hour;
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
        $hours = Hour::with('course','discipline','room','block')
            ->get();
        return view('pages.grade', compact('courses','hours'));
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
        /*Hour::insert([
            'dia'=>'Quinta-feira',
            'hora'=>'9:30 às 13:00',
            'course_id'=>1,
            'discipline_id'=>10,
            'block_id'=>1,
            'room_id'=>4,
            'semester_id'=>2
        ]);*/
        //Room::insert([
        //    'name'=>'Sala 302',
        //    'block_id'=>5
        //]);
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
