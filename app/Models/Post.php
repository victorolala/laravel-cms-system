<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [];
    public function user(){
        return $this->belongsTo(related:User::class);
    }

    // Mutator in Lavarel
    // public function setPostImageAttribute($value){
    //     $this->attribute['post_image']= asset($value);
    // }

    // Accessors in laravel
    public function getPostImageAttribute($value){
        return asset($value);
    }
}
