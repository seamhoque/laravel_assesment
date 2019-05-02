<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

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

        return view('products.index', compact('products'));
    }
    public function landing()
    {
        $products = Products::all();

        return view('welcome', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'product_price'=> 'required|integer',
            'product_qty' => 'required|integer',
            'product_desc'=> 'required',
            'supplier_name' => 'required',
            'product_measurement' => 'required',




        ]);
        $product = new Products([
            'product_name' => $request->get('product_name'),
            'product_price'=> $request->get('product_price'),
            'product_qty'=> $request->get('product_qty'),
            'product_description'=> $request->get('product_desc'),
            'supplier_name'=> $request->get('supplier_name'),
            'product_measurement'=> $request->get('product_measurement')
        ]);
        $product->save();
        return redirect('/products')->with('success', 'Product has been added');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Products::find($id);

      //  dd($product);

        return view('products.edit', compact('product'));
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
        $request->validate([
            'product_name'=>'required',
            'product_price'=> 'required|integer',
            'product_qty' => 'required|integer',
            'product_desc'=> 'required',
            'supplier_name' => 'required',
            'product_measurement' => 'required',




        ]);
        $product = new Products([
            'product_name' => $request->get('product_name'),
            'product_price'=> $request->get('product_price'),
            'product_qty'=> $request->get('product_qty'),
            'product_description'=> $request->get('product_desc'),
            'supplier_name'=> $request->get('supplier_name'),
            'product_measurement'=> $request->get('product_measurement')
        ]);
        $product->save();
        return redirect('/products')->with('success', 'Product has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product has been deleted Successfully');
    }
}
