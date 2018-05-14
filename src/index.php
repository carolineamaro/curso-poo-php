<?php
require __DIR__.'/../vendor/autoload.php';

use Slim\App;
use Slim\Http\Request;
use Intervention\Image\ImageManagerStatic;
use Slim\Http\Response;

$app = new App;
$app->get('/', function (Request $request, Response $response, array $args) {
    $imagem = ImageManagerStatic::canvas(1200, 630, '#ff0000');

    $response->write($imagem->encode()->getEncoded());
    return $response->withHeader('Content-Type', FILEINFO_MIME_TYPE);
});
$app->run();
