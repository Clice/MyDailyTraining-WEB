<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function formatarData($string) {
    return implode("/", array_reverse(explode("-", trim($string))));
}

function calcularIdade($string) {
    $dataNascimento = formatarData($string);
    $dataNascimento = explode("/", $dataNascimento);
    $idade = (date("md", date("U", mktime(0, 0, 0, $dataNascimento[1], $dataNascimento[0], $dataNascimento[2]))) > date("md") ?
            ((date("Y") - $dataNascimento[2]) - 1) : (date("Y") - $dataNascimento[2]));
    return $idade;
}

function dataProximoMes ($dia) {
    return date("d/m/Y", mktime(0, 0, 0, date("m") + 1 , $dia,   date("Y")));
} 
