<?php

require 'classes/Produto.php';
require 'models/Produto.php';

use classes\Produto as productClass;
use models\Produto as productModel;

$produtoClasses = new productClass();
$produtoClasses->mostrarDetalhes();

$produtoModels = new productModel();
$produtoModels->mostrarDetalhes();