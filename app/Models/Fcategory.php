<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fcategory extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','slug','text','status','meta_keywords','meta_descriptions'];
    public $timestamps = false;

    public function faqs()
    {
        return $this->hasMany('App\Models\Faq','category_id','id');
    }
}
