<?php
/**
 * Created by PhpStorm.
 * User: Caroline
 * Date: 14/05/2018
 * Time: 17:41
 */

namespace App\Imagem;


class Salvador
{
    public static function salvar(Imagem $imagem, $nome){
        $arquivo = __DIR__.'/../../temp/'.$nome.'.jpg';

        $imagem->gerarImagem()->save($arquivo);
    }
}