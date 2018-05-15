<?php
/**
 * Created by PhpStorm.
 * User: Caroline
 * Date: 14/05/2018
 * Time: 17:26
 */

namespace App\Imagem;


use Intervention\Image\ImageManagerStatic;

abstract class Imagem
{

    protected $foto;
    protected $nome;

    public function __construct($foto, $nome)
    {
        $this->foto = $foto;
        $this->nome = $nome;
    }

    final public function gerarImagem(){
        $imagem = ImageManagerStatic::canvas(1200, 630, $this->getColor());
        $imagem->insert($this->foto);
        $imagem->text($this->nome, 500, 100, function($font) {
            $font->color('#ffffff');
            $font->align('center');
            $font->valign('center');
        });

        return $imagem;
    }
    abstract public function getColor();

}