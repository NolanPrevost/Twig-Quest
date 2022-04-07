<?php

require_once __DIR__ . '/../config/twig.php';

$products = [1 => 'guitare', 2 => 'bass', 3 => 'bonjo', 4 => 'cithare', 5 => 'lyre', 6 => 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);



