<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookWhatsapp extends Controller
{
    public function webhook(Request $request){
        $dados = $request->all();
        if($dados?->isGroup == true){
            return response()->json(['status' => 'ok']);//ignora mensagens de grupo
        }
    }
}
