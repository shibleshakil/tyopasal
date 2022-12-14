<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','photo', 'status','is_popular'];
    public $timestamps = false;

    // public function items()
    // {
    //     return $this->hasMany('App\Models\Item');
    // }
}
