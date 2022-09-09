<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Início - Exercício Laravel";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre - Alunos Fofos";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  "Sou aluna do curso de PHP - Entra 21. Esta é uma página desenvolvida como atividade prática, da Linguagem PHP, com Banco de Dados e Laravel... Projeto orientado pelo Professor Adriano Machado.";
        $viewData["author"] = "Desenvolvido por: Adriana Rocha.";
        return view('home.about')->with("viewData", $viewData);
    }
}
