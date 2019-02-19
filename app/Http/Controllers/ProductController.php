<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Image;
use function Sodium\compare;

class ProductController extends Controller
{
    public function addProduct(){
        $categories = Category::get();
        $brands = Brand::get();
        return view('dashboard.product.add-product', compact('categories', 'brands'));
    }

    public function saveProduct(Request $request){
        $products = new Product();
        if($request->hasFile('img_one')) {
            $image = $request->file('img_one');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_product_" . $imageName;
            $directory = public_path('/image-ones/');
            $imageOneUrl = $directory.$fileName;
            Image::make($image)->resize(400, 300)->save($imageOneUrl);
            $products->img_one = $fileName;
        }

        if($request->hasFile('img_two')) {
            $image = $request->file('img_two');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_products_" . $imageName;
            $directory = public_path('/image-twos/');
            $imageTwoUrl = $directory.$fileName;
            Image::make($image)->resize(400, 300)->save($imageTwoUrl);
            $products->img_two = $fileName;
        }
        $products->category_id = $request->category_id;
        $products->brand_id = $request->brand_id;
        $products->code = $request->code;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->slug = $request->slug;
        $products->color = $request->color;
        $products->size = $request->size;
        $products->stock = $request->stock;
        $products->save();
        return redirect()->back();
    }

    public function manageProduct(){
        $products = Product::all();
        return view('dashboard.product.manage-product', ['products'=>$products]);
    }

    public function stockProduct($id){
        $products = Product::find($id);
        $products->stock = 0;
        $products->save();
        return redirect('/manage-product');
    }

    public function stockOutProduct($id){
        $products = Product::find($id);
        $products->stock = 1;
        $products->save();
        return redirect('/manage-product');
    }

    public function editProduct($id){
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::find($id);
        return view('dashboard.product.edit-product', compact('categories', 'brands', 'products'));
    }

    public function updateProduct(Request $request){
        $products = Product::find($request->code_id);
        if ($request->hasFile('img_one')){
            if($request->img_one){
                unlink(public_path('/image-ones/').$products->img_one);
            }

        }
        if ($request->hasFile('img_two')){
            if($request->img_two){
                unlink(public_path('/image-twos/').$products->img_two);
            }

        }
        if($request->hasFile('img_one')) {
            $image = $request->file('img_one');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_product_" . $imageName;
            $directory = public_path('/image-ones/');
            $imageOneUrl = $directory.$fileName;
            Image::make($image)->resize(400, 300)->save($imageOneUrl);
            $products->img_one = $fileName;
        }
        if($request->hasFile('img_two')) {
            $image = $request->file('img_two');
            $imageName = $image->getClientOriginalName();
            $fileName = time()."_products_" . $imageName;
            $directory = public_path('/image-twos/');
            $imageTwoUrl = $directory.$fileName;
            Image::make($image)->resize(400, 300)->save($imageTwoUrl);
            $products->img_two = $fileName;
        }

        $products->category_id = $request->category_id;
        $products->brand_id = $request->brand_id;
        $products->code = $request->code;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->slug = $request->slug;
        $products->color = $request->color;
        $products->size = $request->size;
        $products->stock = $request->stock;
        $products->save();
        return redirect('/manage-product');
    }

    public function deleteProduct($id){
        $products = Product::find($id);
        $products->delete();
        return redirect('/manage-product');
    }
}
