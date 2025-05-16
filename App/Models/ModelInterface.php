<?php

namespace App\Models;

interface ModelInterface
{
    public function save();
    
    public function delete();

    public function findById($id);
}