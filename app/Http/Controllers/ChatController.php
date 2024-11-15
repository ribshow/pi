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
            return view('pages.chat.chat', ['data' => $data]);
        }catch(\Exception $e){
            return view('pages.chat.chat', ['data' => []]);
        }
    }

    public function indexTech():View
    {
        try {
            $response = Http::withoutVerifying()->get('https://localhost:7125/chattech');
                if($response->successful())
                {
                    $dataTech = $response->json();
                } else {
                    $dataTech = [];
                }
        }catch(\Exception $e)
        {
            return view('pages.chat.chattech', ['dataTech' => []]);
        }

        return view("pages.chat.chattech", ["dataTech" => $dataTech]);
    }

    public function indexGeek():View
    {
        try{
            $response = Http::withoutVerifying()->get('https://localhost:7125/chatgeek');
            
            if($response->successful()){
                $dataGeek = $response->json();
            } else  {
                $dataGeek = [];
            }
        } catch(\Exception $e){
            return view('pages.chat.chatgeek', ['dataGeek' => []]);
        }
        return view("pages.chat.chatGeek", ["dataGeek" => $dataGeek]);
    }

    public function indexSci():View
    {
        try{
            $response = Http::withoutVerifying()->get('https://localhost:7125/chatsci');
            
            if($response->successful()){
                $dataSci = $response->json();
            } else {
                $dataSci = [];
            }
        } catch(\Exception $e){
            return view('pages.chat.chatsci', ['dataSci' => []]);
        }
        return view('pages.chat.chatsci', ['dataSci' => $dataSci]);
    }
}
