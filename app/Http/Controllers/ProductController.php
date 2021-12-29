<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datacount = Products::count();
        $datacount = $datacount+1;
        $datacount = str_pad($datacount,4,"0",STR_PAD_LEFT);
        $id = "CHO".$datacount;
        //dd($id);
        $products = new Products();
        $products->pd_id=$id;
        $products->pd_name=$request->get('name');
        $products->pd_price=$request->get('price');
        $products->pd_type=$request->get('type');
        $products->save();

        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Products::find($id);
        return response()->json($products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products=Products::find($id);
        $products->pd_name=$request->get('name');
        $products->pd_price=$request->get('price');
        $products->pd_type=$request->get('type');
        $products->update();
        return response()->json($products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Products::find($id);
        $products->delete();
        return response()->json($products);
    }
}
