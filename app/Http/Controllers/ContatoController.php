<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

        return view("site.contato", ["motivo_contatos"=> $motivo_contatos]);
    }

    public function salvar(Request $request) {
        $request->validate(
            [
                "nome"=> "required|min:3|max:40",
                "telefone"=> "required",
                "email"=> "email",
                "motivo_contatos_id"=> "required",
                "mensagem"=> "required|max:2000"
            ],
            [
                "nome.required"=> "O campo nome precisa ser preenchido",
                "nome.min"=> "O campo nome precisa ter no mínimo 3 caracteres",
                "nome.max"=> "O campo nome precisa ter no máximo 40 caracteres",
                "telefone.required"=> "O campo telefone precisa ser preenchido",
                "email.email"=> "O campo email informado não é válido",
                "motivo_contatos_id.required"=> "O campo motivo precisa ser preenchido",
                "mensagem.required"=> "O campo mensagem precisa ser preenchido",
                "mensagem.max"=> "O campo nome precisa ter no máximo 2000 caracteres",
            ]
        );
        SiteContato::create($request->all());
        return redirect()->route("site.index");
    }
}
