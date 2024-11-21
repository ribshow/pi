<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Illuminate\View\View;
use App\Models\Alert;
use App\Models\User;

class AlertController extends Controller
{
    public function index(): View
    {
        return view("pages.index.create-alert");
    }

    public function store(Request $request)
    {
        $user = auth()->id();

        $request->validate([
            "title" => "required|string|max:40",
            "content" => "required|string|max:255"
        ],
        [
            "title.required" => "O título é requerido",
            "title.string" => "O título deve ser do tipo texto",
            "title.max" => "O título deve ter no máximo :max caracteres",
            "content.required" => "A mensagem não pode estar em branco",
            "content.string" => "A mensagem deve ser do tipo string",
            "content.max" => "A mensagem não pode ter mais do que :max caracteres"
        ]);

        Alert::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $user,
        ]);

        return redirect()->route('index');
    }

    public function getIndex(): View
    {
        $alerts = Alert::latest()->with('author')->get();

        if($alerts->count() === 0)
        {
            $alerts = [];
        }
        
        return view('pages.index', compact('alerts'));
    }

    public function destroy($id)
    {
        if(isset($id)){
            Alert::where('id', $id)->delete();
            return response()->json(['message'=> 'Deletado com sucesso!']);
        }else {
            return back()->with('error', 'Não foi possível apagar o alerta!');
        }

    }
}
