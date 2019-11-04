<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Product;

class ProductController extends Controller
{

    public function publish(Request $request, Product $product)
    {
        // 全部發送
        $results = $product->publish(function($notification){
            $notification->all();
        });

        // 發送Pchome & Yahoo
        // $results = $product->publish(function($notification){
        //     $notification->attach(['Pchome', 'Yahoo']);
        // });

        // 只發送Pchome
        // $results = $product->publish(function($notification){
        //     $notification->attach('Pchome');
        // });

        // 全部去除Pchome & Yahoo
        // $results = $product->publish(function($notification){
        //     $notification->all()->detach(['Pchome', 'Yahoo']);
        // });

        // 全部去除Pchome
        // $results = $product->publish(function($notification){
        //     $notification->all()->detach('Pchome');
        // });

        dd($results);
        // return response()->json(compact('results'), 200);
    }


}
