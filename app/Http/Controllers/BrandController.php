<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('dashboard.brand.add-brand');
    }

    public function saveBrand(Request $request){
        $this->validate($request,[
            'brand_name' => 'required',
            'brand_status' => 'required'
        ]);
        $brands = new Brand();
        $brands->brand_name = $request->brand_name;
        $brands->brand_status = $request->brand_status;
        $brands->save();
        return redirect()->back();
    }

    public function manageBrand(){
        $brands = Brand::all();
        return view('dashboard.brand.manage-brand', ['brands'=>$brands]);
    }

    public function stockBrand($id){
        $brands = Brand::find($id);
        $brands->brand_status = 0;
        $brands->save();
        return redirect('/manage-brand');
    }

    public function stockOutBrand($id){
        $brands = Brand::find($id);
        $brands->brand_status = 1;
        $brands->save();
        return redirect('/manage-brand');
    }

    public function editBrand($id){
        $brands = Brand::find($id);
        return view('dashboard.brand.edit-brand',['brands'=>$brands]);
    }

    public function updateBrand(Request $request){
        $brands = Brand::find($request->brand_id);
        $brands->brand_name = $request->brand_name;
        $brands->brand_status = $request->brand_status;
        $brands->save();
        return redirect('/manage-brand');
    }

    public function deleteBrand($id){
        $brands = Brand::find($id);
        $brands->delete();
        return redirect('/manage-brand');
    }
}
