<?php

namespace App\Http\Controllers;

use App\Util\LogConsulta;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $titulo = 'Loja Teste';
        $rodape = date('Y') . ' Todos os direitos reservados';

        $caminho = '../storage/app';
        $log = new LogConsulta($caminho, $titulo);
        $log->registrar();

        return view('site.index', compact('titulo', 'rodape'));
    }
}
