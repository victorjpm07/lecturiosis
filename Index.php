<?php

require_once __DIR__ . '/App/Core/Autoload.php';
use App\Controllers\IndexController;

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