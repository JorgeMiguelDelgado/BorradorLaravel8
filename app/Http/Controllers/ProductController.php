<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product= Product::orderBy('id', 'desc')->paginate(5);
        return view('products.index', compact('product'));
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
    public function store(StoreCurso $request)
    {
        
        /* $product= new Product();
        $product->name  =   $request->name;
        $product->description   =   $request->description;
        $product->amount    =   $request->amount;
        $product->price =   $request->price;
        $product->save();*/

        $product= Product::create($request->all());

        return redirect()->route('products.show', $product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'  =>  'required',
            'description'   =>  'required',
            'price' =>  'required',
            'amount'    =>  'required',
        ]);
        /*$product->name  =   $request->name;
        $product->description  =   $request->description;
        $product->price  =   $request->price;
        $product->amount  =   $request->amount;
        $product->save();*/

        $product->update($request->all());
        return redirect()->route('products.show', $product);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        $products->delete();
        return redirect()->route('products.index');
    }
}
