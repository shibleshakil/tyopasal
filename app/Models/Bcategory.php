<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','status'];
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('App\Models\Post','category_id');
    }
    
}
