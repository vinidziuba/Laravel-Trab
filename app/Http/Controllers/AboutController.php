<?php

namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $titulo = 'Sobre nós';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $caminho = '../storage/app';
        $log = new LogConsulta($caminho, $titulo);
        $log->registrar();
        return view('site.about', compact('titulo', 'rodape'));     
    }
}
