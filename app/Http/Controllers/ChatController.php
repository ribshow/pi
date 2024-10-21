<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        // Consumindo a API
        $response = Http::withoutVerifying()->get('https://localhost:7125/Chat');

            // Verifica se a requisição foi bem-sucedida
            if ($response->successful()) {
                $data = $response->json();
            } else {
                // Caso a API falhe, define um array vazio
                $data = [];
            }
    
            // Retornando a view com a variável 'data' 
            return view('pages.chat.index', ['data' => $data]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
