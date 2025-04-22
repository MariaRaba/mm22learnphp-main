<?php

namespace App\Models;

class Post extends Model {
    public static $table='posts';

    public $id;
    public $title;
    public $body;

    public function snippet(){
        return substr($this->body, 0, 3);
    }
}