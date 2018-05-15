<?php
require __DIR__.'/../vendor/autoload.php';

use Slim\App;
use Slim\Http\Request;
use Intervention\Image\ImageManagerStatic;
use Slim\Http\Response;

$app = new App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);
$app->get('/', function (Request $request, Response $response, array $args) {

    $carol = new \App\Imagem\MulherImagem(
        "https://avatars2.githubusercontent.com/u/26804683?s=400&u=7279c9b6b8c513ef10892d8e9830a63399d29343&v=4",
        "Caroline");

    \App\Imagem\Salvador::salvar($carol, "carol");

    $response->write($carol->gerarImagem()->encode()->getEncoded());
    return $response->withHeader('Content-Type', FILEINFO_MIME_TYPE);
});
$app->run();
