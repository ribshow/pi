<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Models\User;
use App\Models\Course;
use App\Models\Discipline;
use App\Models\Blocks;
use App\Models\Room;
use App\Models\Semester;
use App\Models\Hour;

class AdmController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // usuários
        $users = User::all();

        // cadastrar disciplinas
        $courses = Course::all();
        $disciplines = Discipline::all();
        $blocks = Blocks::all();
        $users = User::all();
        $rooms = Room::all();
        $semesters = Semester::all();

        // dsm 1 semestre
        $dsm1 = Hour::whereIn('id', [8,9,10,11,12,13,14,15,16])->get();
        // dsm 2 semestre
        $dsm2 = Hour::whereIn('id', [1,2,3,4,5,6,7])->get();

        return view('pages.adms.dashboard',
        compact(
            'posts','users',
            // disciplinas
            'blocks','rooms','semesters','courses','disciplines',
            //dsm1 - dsm2
            'dsm1','dsm2',
        ));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'Usuário excluído com sucesso!']);
    }

    public function editHour($id)
    {
        $courses = Course::all();
        $users = User::all();
        $disciplines = Discipline::all();
        $blocks = Blocks::all();
        $rooms = Room::all();
        $semesters = Semester::all();
        $hour = Hour::findOrFail($id);
        $user = $hour->user;
        //dd($hour->user_id);

        return view('pages.adms.edit-hour',
        compact(
            'hour','courses','users','disciplines','blocks','rooms','semesters'));
    }

    public function store(Request $request, $id)
    {
        $hour = Hour::findOrFail($id);
        // Atualizar professor
        $hour->user_id = $request->input('user_id');
        $hour->save();

        // Atualizar curso
        $hour->course_id = $request->input('course_id');
        $hour->save();

        // Atualizar Semestre
        $hour->semester_id = $request->input('semester_id');
        $hour->save();

        // Atualizar Disciplina
        $hour->discipline_id = $request->input('discipline_id');
        $hour->save();

        // Atualizar Sala
        $hour->room_id = $request->input('room_id');
        $hour->save();

        // Atualizar Block
        $hour->block_id = $request->input('block_id');
        $hour->save();

        // Atualizar Dia
        $hour->dia = $request->dia;
        $hour->save();

        // Atualizar Hora
        $hour->hora = $request->hora;
        $hour->save();
    }
}
