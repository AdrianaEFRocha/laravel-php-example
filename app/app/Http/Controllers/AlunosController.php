<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public static $alunos = [
        ["id"=>"1", "name"=>"Gato", "description"=>"Nome: Cat John", "image" => "gatoa.jpeg", "idade"=>"2 anos"],
        ["id"=>"2", "name"=>"Cachorro", "description"=>"Nome: Dog Fredy", "image" => "cachorro.jpeg", "idade"=>"1,5 anos"],
        ["id"=>"3", "name"=>"Pássaro", "description"=>"Nome: Bird Below", "image" => "passaro.jpeg", "idade"=>"01 ano"],
        ["id"=>"4", "name"=>"Peixe", "description"=>"Nome: Fish Stick", "image" => "peixe.jpeg", "idade"=>"6 meses"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Alunos";
        $viewData["subtitle"] =  "Fofuras do dia!";
        $viewData["alunos"] = AlunosController::$alunos;
        return view('alunos.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $alunos = AlunosController::$alunos[$id-1];
        $viewData["title"] = $alunos["name"]." - Cadastro Fofo";
        $viewData["subtitle"] =  $alunos["name"]." - Informações";
        $viewData["alunos"] = $alunos;
        return view('alunos.show')->with("viewData", $viewData);
    }
}
