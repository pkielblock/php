<?php
require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug= new Slugify();
$slug->addRule('ão', 'aoaoaoao');
echo $slug->slugify('teste com acentuação para geração de slug', '_');