<?php

/**
 * This file contains an example of coding styles.
 * php version 8.0.0
 *
 * @category Description
 * @package  Category
 * @author   Vinícius Gomes <vfelipe-gomes@gmail.com>
 * @license  http://www.teste.com.br teste
 * @link     http://url.com
 */

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(
    [
    'base_uri' => 'https://www.alura.com.br/',
    'verify' => false
    ]
);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');
$nCursos = 0;

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
    $nCursos++;
}

echo "= = = = = = = = = = = = = = = = = = = = =";
echo " = = = = = = = = = = = = = = = = = = =" . PHP_EOL;
echo "Número de cursos PHP na Alura: $nCursos";
