<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class WarehouseController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $type)
    {
        if($type == 1){
            $products = Products::find($id);
            $stock = $products->pd_stock + $request->get('quantity');
            $products->pd_stock = $stock;
            $products->update();
            return redirect('warehouse');
        }else if($type == 2){
            $products = Products::where($id);
            $stock = $products->pd_stock - $request->get('quantity');
            $products->pd_stock = $stock;
            $products->update();
            return redirect('warehouse');
        }else{

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
