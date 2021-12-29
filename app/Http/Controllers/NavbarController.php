<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function order()
    {
        return view('order');
    }

    public function packaging()
    {
        return view('packaging');
    }

    public function warehouse()
    {
        return view('warehouse');
    }

    public function product()
    {
        return view('product');
    }

    public function add_product()
    {
        return view('product_add');
    }

    public function edit_product($id)
    {
        $product=Products::where('pd_id',$id);
        return view('product_edit',compact('id'));
    }

    public function add_order()
    {
        return view('order_add');
    }

}
