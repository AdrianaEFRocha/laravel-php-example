<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"Ração para Gatos", "description"=>"Persian 1kg", "image" => "racaogato.jpeg", "price"=>"60"],
        ["id"=>"2", "name"=>"Ração para Cachorros", "description"=>"Gran Plus 1kg ", "image" => "racaocachorro.jpeg", "price"=>"30"],
        ["id"=>"3", "name"=>"Ração para Pássaros", "description"=>"NutróPica 300g", "image" => "racaopassaro.jpeg", "price"=>"15"],
        ["id"=>"4", "name"=>"Ração para Peixes", "description"=>"Nutriflakes 500g", "image" => "racaopeixe.jpeg", "price"=>"20"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Produtos - Online Store";
        $viewData["subtitle"] =  "Lista de produtos";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Produtos";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
