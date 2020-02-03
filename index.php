<?php
require 'configs.php';
require __DIR__ . '/vendor/autoload.php';

use App\Models\Jogador;


$mJogador1 = new Jogador();

$arJogadores = $mJogador1->buscarJogadores(Jogador::JOGADOR_ATIVO);

print_r($arJogadores);