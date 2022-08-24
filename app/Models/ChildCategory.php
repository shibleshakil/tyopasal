<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','status','category_id','subcategory_id'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withDefault();
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory')->withDefault();
    }

    // public function items()
    // {
    //     return $this->hasMany('App\Models\Item','childcategory_id')->where('status',1);
    // }
}
