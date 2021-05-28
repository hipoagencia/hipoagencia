<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        $product = Product::find($request->product);

        return view('user.checkout',[
            'product' => $product
        ]);
    }
}
