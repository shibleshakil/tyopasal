<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Currency;
use App\Models\Subcategory;

class CommonController extends Controller
{
    public function getsubCategory(Request $request)
    {

        if($request->category_id){
            $data = Category::findOrFail($request->category_id);
            $data = $data->subcategory;
        }else{
            $data = [];
        }

        return response()->json(['data'=>$data]);
    }
}
