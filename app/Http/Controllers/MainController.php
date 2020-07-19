<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Review;

class MainController extends Controller
{
    public function index()
    {
        // $category = Category::find(1); //Category::firstWhere(id, 1)
        // $products = $category->products;
        // dd($products->count());

        // $product = Product::find(1);
        // dd($product->category->name);

        $categories = Category::with('products')->get();
        $products = Product::with('category')->where('recommended', '=', 1)->get();
        $reviews = Review::all();
    	return view('main.index', compact('categories', 'products','reviews'));
    }

    // public function contacts()
    // {
    // 	$title = 'Contacts';
    // 	return view('main.contacts', compact('title'));
    // }

    public function category(string $slug)
    {
        $category = Category::firstWhere('slug', $slug);
        $products = Product::where('category_id', $category->id)->paginate(8);
        return view('shop.category', compact('category', 'products'));
    }

    public function product(string $slug)
    {
        $product = Product::all()->where('slug','=', $slug);
        return view('shop.product', compact('product'));
    }

    public function review($id)
    {
        // $reviews = Review::all();
        // return view('shop.review', compact('reviews'));
        $reviews = Review::all()->where('user_id','=', $id);;
        $products = Product::all()->where('id','=', $id);
        return view('shop.review')->with(compact('reviews','products'));
    }

    public function getReview(Request $request)
    {
        $review = new Review();
        $review->review = $request->comment;
        $review->user_id = $request->user;
        $review->product_id = $request->product;
        $review->save(); //сохраняет данные модели в БД

        return back();

        // return $request->comment;
    }

}


// Product::where('recommended', '=', 1)->where('price', '>', 100)->where('category_id', 2)->orwhere('category_id', 3);