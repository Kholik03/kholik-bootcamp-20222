<?php

namespace App\Http\Controllers;

use App\Repositories\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public function getSearch(Request $request)
    // {
    //   if ($request->has('search')){
    //     $data['product'] = Products::where('product_name', 'LIKE', '%'.$request->search.'%');
    //   } else {
    //    return view('front.product_detail');
    //   }
    // }

    public static function getDetail($id)
    {
        $data['product'] = Products::findById($id);

        return view('front.product_detail',$data);
    }

    
}
