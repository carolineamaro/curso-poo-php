<?php
/**
 * Created by PhpStorm.
 * User: Caroline
 * Date: 14/05/2018
 * Time: 17:43
 */

namespace App\Imagem;


use Intervention\Image\ImageManagerStatic;

class DogImagem extends Imagem
{
    public function getColor()
    {
        return "#d400aa";
    }
}