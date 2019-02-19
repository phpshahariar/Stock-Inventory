<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductSell;
use App\Supllier;
use Illuminate\Http\Request;

class ProductSellController extends Controller
{
    public function addProductSell(){
        $sellProducts = Product::get();
        return view('dashboard.sell.add-sell', compact('sellProducts'));
    }

    public function saveProductSell(Request $request){
        $sells = new ProductSell();
        $sells->name = $request->name;
        $sells->phone = $request->phone;
        $sells->address = $request->address;
        $sells->product_id = $request->product_id;
        $sells->quentity = $request->quentity;
        $sells->amount = $request->amount;
        $sells->due_amount = $request->due_amount;
        $sells->date = $request->date;
        $sells->slug = $request->slug;
        $sells->status = $request->status;
        $sells->save();
        return redirect()->back();
    }

    public function manageProductSell(){
        $sells = ProductSell::all();
        return view('dashboard.sell.manage-sell', compact('sells'));
    }



    public function deleteProductSell($id){
        $deleteproduct = ProductSell::find($id);
        $deleteproduct->delete();
        return redirect()->back();
    }

    public function getProduct($id){
        $product = Product::find($id);
        return view('dashboard.get_product', compact('product'));
    }
}
