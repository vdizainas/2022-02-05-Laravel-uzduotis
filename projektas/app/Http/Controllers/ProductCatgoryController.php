<?php

namespace App\Http\Controllers;

use App\Models\ProductCatgory;
use App\Http\Requests\StoreProductCatgoryRequest;
use App\Http\Requests\UpdateProductCatgoryRequest;

class ProductCatgoryController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCatgoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCatgoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCatgory  $productCatgory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCatgory $productCatgory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCatgory  $productCatgory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCatgory $productCatgory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCatgoryRequest  $request
     * @param  \App\Models\ProductCatgory  $productCatgory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCatgoryRequest $request, ProductCatgory $productCatgory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCatgory  $productCatgory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCatgory $productCatgory)
    {
        //
    }
}
