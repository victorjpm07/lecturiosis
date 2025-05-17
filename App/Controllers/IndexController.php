<?php

namespace App\Controllers;

use App\Models\User;


/*class IndexController
{

    public function __construct()
    {
        //OPERACIONES
        $users = (new User())->getAll();

        var_dump($users);

        //LLAMADA A UNA VISTA
        require('./App/Views/IndexView.php');
    }
}
*/

class IndexController
{
    public function ejecutar()
    {
        $usuario = new User();
        $usuario->setId(1);
        $usuario->setnombre("Victor");
        $usuario->setemail("victorcodi70@gmail.com");

        echo " Nombre: " . $usuario->getnombre() . "<br>";
        echo " Email: " . $usuario->getemail() . "<br>";

        $usuario->save();
        $usuario->findById($usuario->getId());
        $usuario->delete();

    }
}