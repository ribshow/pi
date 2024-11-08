<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use App\Models\Post;
use App\Models\User;
use App\Models\Course;
use App\Models\Discipline;
use App\Models\Blocks;
use App\Models\Room;
use App\Models\Semester;
use App\Models\Hour;

class AdmController extends Controller
{
    public function index()
    {
        try{
            // consumindo a API
            $responseHub = Http::withoutVerifying()->get('https://localhost:7125/Chat');

            if($responseHub->successful()){
                $dataHub = $responseHub->json();
            }
        }catch(\Exception $e){
            $data = [];
        }

        try{
            $responseTech = Http::withoutVerifying()->get('https://localhost:7125/ChatTech');
            if($responseTech->successful()){
                $dataTech = $responseTech->json();
            }

        }catch(\Exception $e){
            $dataTech = [];
        }

        try{
            $responseGeek = Http::withoutVerifying()->get('https://localhost:7125/ChatGeek');
            if($responseGeek->successful()){
                $dataGeek = $responseGeek->json();
            }

        }catch(\Exception $e){
            $dataGeek = [];
        }

        try{
            $response = Http::withoutVerifying()->get('https://localhost:7125/chatsci');
            
            if($response->successful()){
                $dataSci = $response->json();
            }
        } catch(\Exception $e){
            $dataSci = [];
        }
        
        $posts = Post::all();
        // usuários
        $users = User::all();

        // cadastrar disciplinas
        $courses = Course::all();
        $disciplines = Discipline::all();
        $blocks = Blocks::all();
        $users = User::all();
        $rooms = Room::all();
        $semesters = Semester::all();

        // dsm 1 semestre
        $dsm1 = Hour::whereIn('id', [8, 9, 10, 11, 12, 13, 14, 15, 16])->get();
        // dsm 2 semestre
        $dsm2 = Hour::whereIn('id', [1, 2, 3, 4, 5, 6, 7])->get();
        // sn 1 semestre
        $sn1 = Hour::whereIn('id', [17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28])->get();
        // sn 2 semestre
        $sn2 = Hour::whereIn('id', [29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40])->get();
        // sn 3 semestre
        $sn3 = Hour::whereIn('id', [41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52])->get();
        // sn 4 semestre
        $sn4 = Hour::whereIn('id', [53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64])->get();
        // sn 5 semestre
        $sn5 = Hour::whereIn('id', [65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76])->get();
        // sn 6 semestre
        $sn6 = Hour::whereIn('id', [77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88])->get();
        // cn 1 semestre
        $cn1 = Hour::whereIn('id', [89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100])->get();
        // cn 2 semestre
        $cn2 = Hour::whereIn('id', [101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112])->get();
        // cn 3 semestre
        $cn3 = Hour::whereIn('id', [113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124])->get();
        // cn 4 semestre
        $cn4 = Hour::whereIn('id', [125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136])->get();
        // cn 5 semestre
        $cn5 = Hour::whereIn('id', [137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148])->get();
        // cn 6 semestre
        $cn6 = Hour::whereIn('id', [149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160])->get();
        // gpi 1 semestre
        $gp1 = Hour::whereIn('id', [161, 162, 163, 164, 165, 166, 167, 168, 169, 170])->get();
        // gpi 2 semestre
        $gp2 = Hour::whereIn('id', [171, 172, 173, 174, 175, 176, 177, 178, 179, 180])->get();
        // gpi 3 semestre
        $gp3 = Hour::whereIn('id', [181, 182, 183, 184, 185, 186, 187, 188, 189, 190])->get();
        // gpi 4 semestre
        $gp4 = Hour::whereIn('id', [191, 192, 193, 194, 195, 196, 197, 198, 199, 200])->get();
        // gpi 5 semestre
        $gp5 = Hour::whereIn('id', [201, 202, 203, 204, 205, 206, 207, 208, 209, 210])->get();
        // gpi 6 semestre
        $gp6 = Hour::whereIn('id', [211, 212, 213, 214, 215, 216, 217, 218, 219, 220])->get();
        // ma 1 semestre
        $ma1 = Hour::whereIn('id', [221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231, 232])->get();
        // ma 2 semestre
        $ma2 = Hour::whereIn('id', [233, 234, 235, 236, 237, 238, 239, 240, 241, 242, 243, 244, 245])->get();
        // ma3 semestre
        $ma3 = Hour::whereIn('id', [246, 247, 248, 249, 250, 251, 252, 253, 254, 255, 256, 257])->get();
        // ma4 semestre
        $ma4 = Hour::whereIn('id', [258, 259, 260, 261, 262, 263, 264, 265, 266, 267, 268, 269])->get();
        // ma5 semestre
        $ma5 = Hour::whereIn('id', [270, 271, 272, 273, 274, 275, 276, 277, 278, 279, 280, 281])->get();
        // ma6 semestre
        $ma6 = Hour::whereIn('id', [282, 283, 284, 285, 286, 287, 288, 289, 290, 291])->get();

        return view(
            'pages.adms.dashboard',
            compact(
                'posts',
                'users',
                // chats
                'dataHub', 'dataTech','dataGeek', 'dataSci',
                // disciplinas
                'blocks',
                'rooms',
                'semesters',
                'courses',
                'disciplines',
                //dsm1 - dsm2
                'dsm1',
                'dsm2',
                // sn1 - sn2 - sn3 - sn4 - sn5 - sn6
                'sn1',
                'sn2',
                'sn3',
                'sn4',
                'sn5',
                'sn6',
                // cn1 - cn2 - cn3 - cn4 - cn5 - cn6
                'cn1',
                'cn2',
                'cn3',
                'cn4',
                'cn5',
                'cn6',
                // gp1 - gp2 - gp3 - gp4 - gp5 - gp6
                'gp1',
                'gp2',
                'gp3',
                'gp4',
                'gp5',
                'gp6',
                // ma1 - ma2 - ma3 - ma4 - ma5 - ma6
                'ma1',
                'ma2',
                'ma3',
                'ma4',
                'ma5',
                'ma6'
            )
        );
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'Usuário excluído com sucesso!']);
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);

        if ($user->role === 'teacher') {
            return response()->json(['success' => 'Usuário já é professor!']);
        }

        $user->role = 'teacher';
        $user->save();

        return response()->json(['success' => 'Usuário definido como Professor com sucesso!']);
    }

    public function editHour($id)
    {
        $courses = Course::all();
        $users = User::orderBy('name', 'asc')->get();
        $disciplines = Discipline::orderBy('name', 'asc')->get();
        $blocks = Blocks::all();
        $rooms = Room::all();
        $semesters = Semester::all();
        $hour = Hour::findOrFail($id);
        $user = $hour->user;
        //dd($hour->user_id);

        return view(
            'pages.adms.edit-hour',
            compact(
                'hour',
                'courses',
                'users',
                'disciplines',
                'blocks',
                'rooms',
                'semesters'
            )
        );
    }
    // MÉTODO PARA ATUALIZAR HORÁRIO DE DETERMINADO CURSO
    public function store(Request $request, $id)
    {
        $hour = Hour::findOrFail($id);
        // Atualizar professor
        $hour->user_id = $request->input('user_id');
        $hour->save();

        // Atualizar curso
        $hour->course_id = $request->input('course_id');
        $hour->save();

        // Atualizar Semestre
        $hour->semester_id = $request->input('semester_id');
        $hour->save();

        // Atualizar Disciplina
        $hour->discipline_id = $request->input('discipline_id');
        $hour->save();

        // Atualizar Sala
        $hour->room_id = $request->input('room_id');
        $hour->save();

        // Atualizar Block
        $hour->block_id = $request->input('block_id');
        $hour->save();

        // Atualizar Dia
        $hour->dia = $request->dia;
        $hour->save();

        // Atualizar Hora
        $hour->hora = $request->hora;
        $hour->save();
    }

    // Deletando um chat geral
    public function deleteChat($id)
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/Chat/'.$id);
        
        if($response->successful()){
            return response()->json(['success' => 'Chat excluído com sucesso!']);
        }
        else {
            return response()->json(['error' => 'Erro ao excluir chat!']);
        }
    }

    //  Limpando chat geral
    public function deleteChatAll()
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/chat/delete/all');
        
        if($response->successful()){
            return response()->json(['success' => 'Chat limpo com sucesso!']);
        } else {
            return response()->json(['error' => 'Erro ao limpar chat!']);
        }
    }

    // Apagando 1 mensagem específica do chatTech
    public function deleteChatTech($id)
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/ChatTech/'.$id);

        if($response->successful()){
            return response()->json(['success' => 'Chat exclúido com sucesso!']);
        }
        else {
            return response()->json(['error' => 'Erro ao excluir chat!']);
        }
    }

    // Limpando todas as mensagens do chatTech
    public function deleteChatTechAll()
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/chattech/delete/all');

        if($response->successful()){
            return $response;
        } else {
            return response()->json(['error' => 'Erro ao limpar chat!']);
        }
    }

    // Apagando uma mensagem do chat geek
    public function deleteChatGeek($id)
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/chatgeek/'. $id);
        
        if($response->successful()){
            return $response;
        } else {
            return response()->json(['error'=> 'Error ao excluir mensagem']);
        }
    }

    // Limpando o chat geek
    public function deleteChatGeekAll()
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/chatgeek/delete/all');

        if($response->successful()){
            return response()->json(['success' => 'Chat limpo com sucesso!']);
        } else {
            return response()->json(['error' => 'Ocorreu um erro ao limpar o chat!']);
        }
    }

    // Apagando uma mensagem do chat scientific
    public function deleteChatSci($id)
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/chatsci/' . $id);
        
        if($response->successful()){
            return response()->json(['success' => 'Mensagem apagada com sucesso!']);
        } else {
            return response()->json(['error' => 'Ocorreu um erro ao apagar a mensagem!']);
        }
    }

    // Limpando o chat scientific
    public function deleteChatSciAll()
    {
        $response = Http::withoutVerifying()->delete('https://localhost:7125/chatsci/delete/all');

        if($response->successful()){
            return response()->json(['success' => 'Chat limpo com sucesso!']);
        }else {
            return response()->json(['error' => 'Ocorreu um erro ao limpar o chat']);
        }
    }

}
