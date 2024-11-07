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
        try {
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
        }catch(\Exception $e){
            return view('pages.chat.index', ['data' => []]);
        }
    }

    public function indexTech():View
    {
        try {
            $response = Http::withoutVerifying()->get('https://localhost:7125/chattech');
                if($response->successful())
                {
                    $data = $response->json();
                } else {
                    $data = [];
                }
        }catch(\Exception $e)
        {
            return view('pages.chat.index', ['data' => []]);
        }

        return view("pages.chat.chattech", ["data" => $data]);
    }
}
