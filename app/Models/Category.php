<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
// con questo metodo richiamando $miaCategoria->post ottengo tutti i post in relazione alla categoria
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
