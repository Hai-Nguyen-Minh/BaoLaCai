<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $cate = Categories::all();
        return response()->json(['cate'=>$cate]);
    }
}
