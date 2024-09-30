<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // questo metodo che verrà visto come una proprietà ($miopost->category) mi restituisce la categoria in relazione
    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected $fillable = ['category_id','title', 'text', 'reading_time', 'slug'];
    // protected $casts = [
    //     'created_at' => 'datetime:d/m/Y'
    // ];
}
