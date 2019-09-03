<?php

namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $titulo = 'Produtos';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $caminho = '../storage/app';
        $log = new LogConsulta($caminho, $titulo);
        $log->registrar();
        return view('site.product', compact('titulo', 'rodape'));   
    }
}
