<?php
require __DIR__.'/../vendor/autoload.php';

use Slim\App;
use Slim\Http\Request;
use Intervention\Image\ImageManagerStatic;
use Slim\Http\Response;

$app = new App;
$app->get('/', function (Request $request, Response $response, array $args) {
    $imagem = ImageManagerStatic::canvas(1200, 630, '#ff0000');

    $imagem->insert("https://avatars2.githubusercontent.com/u/26804683?s=400&u=7279c9b6b8c513ef10892d8e9830a63399d29343&v=4");

    $response->write($imagem->encode()->getEncoded());
    return $response->withHeader('Content-Type', FILEINFO_MIME_TYPE);
});
$app->run();
