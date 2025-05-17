<?php

require_once __DIR__ . '/App/Core/Autoload.php';
use App\Controllers\IndexController;

$controller = new IndexController();
$controller->ejecutar();

class Index
{

    public function execute()
    {
        return new IndexController;
    }
}

//TRADICIONAL
#$app = new Index();
#$app->execute();

//OBJETOS ANONIMOS
(new Index())->execute();