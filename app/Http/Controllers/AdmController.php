<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Models\User;

class AdmController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $users = User::all();

        return view('pages.adms.dashboard', compact('posts','users'));
    }
}
