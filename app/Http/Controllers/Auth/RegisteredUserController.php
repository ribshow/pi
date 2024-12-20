<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('pages.cadastro');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nickname' => ['required', 'string', 'max:25', 'unique:'.User::class],
            'image_url' => ['required','image', 'mimes:jpeg,png,jpg,png', 'max:2048'],
        ]);

        // registrando o usuário na api e gerando toker
        try {
            Http::withoutVerifying()->post("https://localhost:7125/api/auth/register", 
                ["email" => $request->email, "password" => $request->password]);

            $response = Http::withoutVerifying()->post("https://localhost:7125/api/auth",
                ['email' => $request->email, 'password' => $request->password]);

            if($response->successful()){
                // Armazena o token JWT na session do Laravel
                $token = $response->json()['token'];
                session(['api_token' => $token]);
            } else {
                return back()->withErrors(['error' => 'Authenticated failed with webApi']);
            }
        }catch(\Exception $e)
        {
                return back()->with('errors', $e);
        }

        $imagePath = 'users/avatar-profile.png';

        // verifica se a requisição tem um arquivo e se ele é válido
        if($request->hasFile('image_url') && $request->file('image_url')->isValid()) {
            $imagePath = $request->file('image_url')->store('users', 'public');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nickname' => $request->nickname,
            'image_url' => $imagePath,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('index', absolute: false));
    }
}
