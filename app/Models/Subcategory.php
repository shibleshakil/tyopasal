<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'category_id','status'];
    public $timestamps = false;


    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withDefault();
    }

    public function childcategory()
    {
        return $this->hasMany('App\Models\ChildCategory')->where('status',1);
    }

    // public function items()
    // {
    //     return $this->hasMany('App\Models\Item')->where('status',1);
    // }
}
