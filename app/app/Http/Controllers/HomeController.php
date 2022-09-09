<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Exercício Laravel";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Alunos Fofos";
        $viewData["subtitle"] =  "Sobre nós";
        $viewData["description"] =  "Pagina sobre nós...";
        $viewData["author"] = "Desenvolvido por: Adriana Rocha";
        return view('home.about')->with("viewData", $viewData);
    }
}
