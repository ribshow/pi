<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'message'=>'required|string|max:1000',
        ]);

        $request->user()->posts()->create($validated);
        return redirect(route('mural'));
    }

    public function show(): View
    {
        $posts = Post::latest()->get();
        return view('pages.mural', compact('posts'));
    }

    public function edit(Post $post): View
    {
        Gate::authorize('update', $post);
        $images = File::files(public_path('/img'));
        $image = 'img/logo_preto.svg';
        return view('pages.posts',compact('images','image'),[
            'post'=>$post,
        ]);
    }

    public function update(Request $request, Post $post): RedirectResponse
    {
        Gate::authorize('update', $post);

        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'message'=>'required|string|max:1000',
        ]);

        $post->update($validated);

        return redirect(route('mural'));
    }

    public function destroy(Post $post): RedirectResponse
    {
        Gate::authorize('delete', $post);

        $post->delete();

        return redirect(route('mural'));
    }
}
