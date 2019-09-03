<?php

namespace App\Util;

class LogConsulta {

    public $caminho;
    public $page;
    
    public function __construct($caminho, $page) {
        $this->caminho = $caminho;
        $this->page = $page;
    }
    
    public function registrar() {
        
            $data = date('d/m/Y H:i');
            $ip = $_SERVER["REMOTE_ADDR"];
            $pagina = $this->page;

        if (file_exists($this->caminho.'/log_geral.txt')) {
            $dadosAtuais = $this->capturar();
            $dadosAtuais .= "\n".'Página: '.$pagina.' | '.'Data: '.$data.' | '.'Ip: '.$ip.";";
            $this->gravarArquivo($dadosAtuais);
        } else {
            $dadosAtuais =  'Página: '.$pagina.' | '.'Data: '.$data.' | '.'Ip: '.$ip.";";
            $this->gravarArquivo($dadosAtuais);
        }
        
        return $dadosAtuais;
        
    }
    
    private function gravarArquivo($log) {
        file_put_contents
            ($this->caminho.'/log_geral.txt', $log);
    }
    
    public function capturar() {
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
        return $dados;
    }

    public function ultLog() {
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
        $dados = explode(';', $dados);
        $dados = array_reverse($dados);

        return $dados[1];
    }
    
}