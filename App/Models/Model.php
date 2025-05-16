<?php

namespace App\Models;

require_once 'ModelInterface.php';

class Model implements ModelInterface{

    public function save()
    {
        echo "Guardando el modelo...\n";    
    }

    public function delete()
    {
        echo "Borrando el modelo...\n";
    }

    public function findById($id)
    {
        echo "Buscando el modelo con id: $id\n";
    }
}    