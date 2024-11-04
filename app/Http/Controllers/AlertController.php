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
            "title" => "required|string|max:100",
            "content" => "required|string|max:255"
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
        $alerts = Alert::all();

        foreach($alerts as $alert)
        {
            $user = User::where('id', $alert->user_id)->first();

            $alert->user_id = $user->name;
        }

        if($alerts->count() === 0)
        {
            $alerts = [];
        }
        //dd($alerts);

        return view('pages.index', compact('alerts'));
    }
}
