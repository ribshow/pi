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
        // capturo o token JWT que está armazenado na sessão
        $token = session('api_token');
        try {
            // passo o token como um header na requisição
            $response = Http::withoutVerifying()
                ->withHeaders([
                    'Authorization' => 'Bearer '. $token
                ])
                ->get('https://localhost:7125/Chat');
                if($response->successful())
                {
                    $dataHub = $response->json();
                } else {
                    $dataHub = [];
                }
        }catch(\Exception $e)
        {
            return view('pages.chat.chat', ["dataHub" => []]);
        }

        return view("pages.chat.chat", ["dataHub" => $dataHub]);
    }

    public function indexTech():View
    {
        // capturo o token JWT que está armazenado na sessão
        $token = session('api_token');
        try {
            // passo o token como um header na requisição
            $response = Http::withoutVerifying()
                ->withHeaders([
                    'Authorization' => 'Bearer '. $token
                ])
                ->get('https://localhost:7125/chattech');
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
        $token = session('api_token');
        try{
            $response = Http::withoutVerifying()
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $token
                ])
                ->get('https://localhost:7125/chatgeek');
            
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
        $token = session('api_token');
        if(!$token){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        try{
            $response = Http::withoutVerifying()
                ->withHeaders([
                    'Authorization' => 'Bearer ' . $token
                ])
                ->get('https://localhost:7125/chatsci');
            
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
