<?php

namespace App\Models;

/*use App\Models\Connection;
class User
{
    protected $db;
    public function __construct()
    {
        $this->db = Connection::getInstance();
    }

    public function getAll()
    {
        $sql = "SELECT users.name, users.email
        FROM users;";
        $result = $this->db->prepare($sql);
        $result->execute();
        $users = [];
        $users = $result->fetchAll(\PDO::FETCH_ASSOC);

        return $users;
    }
}*/

require_once 'Model.php';

Class User extends Model
{
    private $id;
    private $nombre;
    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

}