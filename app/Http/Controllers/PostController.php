<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
use Exception;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:80',
                'message' => 'required|string|max:250',
            ]);

            $request->user()->posts()->create($validated);

            return redirect(route('mural'));
        } catch (Exception $e) {
            Log::error('Erro ao criar post: ' . $e->getMessage());

            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao criar o Post']);
        }
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
        return view('pages.posts', compact('images', 'image'), [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        Gate::authorize('update', $post);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        $post->update($validated);

        return redirect(route('mural'));
    }

    public function destroy(Post $post)
    {
        Gate::authorize('delete', $post);

        $post->delete();

        return response()->json(['success' => 'Post deletado com sucesso'], Response::HTTP_OK);
    }
}
