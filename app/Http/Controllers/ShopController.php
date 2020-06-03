<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use Auth;
use App\Item;
use Cart;

class ShopController extends Controller
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
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }

    public function addCart(Item $item){
        if (Auth::check()) {
            // $item = Item::findOrFail($item->id);
            // $rowId  = $item->id;
            // $userID    = Auth::user()->id;

            //將商品1放入購物車
            \Cart::session(Auth::user()->id)->add(array(
                'id' => $item->id,
                'name' => $item->title,
                'price' => $item->price,
                'quantity' => 1,
                'attributes' =>  array(),
                'associatedModel' => $item
            ));
            flash('已加入購物車')->success()->important();
            return redirect('/myindex');
        }else{
            return redirect('/login');
        }
    }

    public function showCart(Request $request){
        if(Auth::check()){
            //取得購物車內容
            $content = \Cart::session(Auth()->user()->id)->getContent();
            return $content;

        }else{
            return redirect('/login');
        }
    }
}
