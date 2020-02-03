<?php

namespace App\Models;

use App\Db\Model;

class Jogador extends Model {

    const JOGADOR_ATIVO   = true;
    const JOGADOR_INATIVO = false;

    const STATUS_ATIVO    = 1;
    const STATUS_INATIVO  = 2;
    const STATUS_PENDENTE = 3;

    private $jogadores = [
        ['nome' => 'Daniel', 'ativo' => false,'status' => 1],
        ['nome' => 'Ingrid', 'ativo' => true,'status' => 2],
        ['nome' => 'Ingrid', 'ativo' => true,'status' => 3]
    ];

    public function buscarJogadores($status)
    {
        $this->getConn()->
        $arrJogadores = [];
        foreach($this->jogadores as $jogador) {
            if($jogador['status'] == $status) {
                    $arrJogadores[] = $jogador;
            }
        }
        return $arrJogadores;
        /**
        *return array_filter($this->jogadores,function($jogador) use ($status){
        *    return $jogador['status'] == $status;
        *});
        */
    }
}