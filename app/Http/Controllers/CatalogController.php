<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $characteristics = $request->input('characteristics');

        $query = Product::query();

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        if ($characteristics) {
            foreach ($characteristics as $key => $value) {
                $query->whereHas('characteristics', function ($q) use ($key, $value) {
                    $q->where('key', $key)->where('value', $value);
                });
            }
        }


        $products = $query->paginate(10);
        return response()->json($products);
    }
}
