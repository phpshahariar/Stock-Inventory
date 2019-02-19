<?php

namespace App\Http\Controllers;

use App\Supllier;
use Illuminate\Http\Request;

class SupllierController extends Controller
{
    public function addSupllier(){
        return view('dashboard.supllier.add-supllier');
    }

    public function saveSupllier(Request $request){
        $this->validate($request,[
        'supllier_name'=>'required',
        'supllier_number'=>'required|max:11|min:11',
        'supllier_address'=>'required',
        'start_date'=>'required',
        'city_area'=>'required',
        ]);
        $supllier = new Supllier();
        $supllier->supllier_name = $request->supllier_name;
        $supllier->supllier_number = $request->supllier_number;
        $supllier->supllier_address = $request->supllier_address;
        $supllier->start_date = $request->start_date;
        $supllier->city_area = $request->city_area;
        $supllier->save();
        return redirect()->back();
    }

    public function manageSupllier(){
        $suplliers = Supllier::all();
        return view('dashboard.supllier.manage-supllier', compact('suplliers'));
    }

    public function editSupllier($id){
        $suplliers = Supllier::find($id);
        return view('dashboard.supllier.edit-supllier', compact('suplliers'));
    }

    public function updateSupllier(Request $request){
        $suplliers = Supllier::find($request->supllier_id);

        $suplliers->supllier_name = $request->supllier_name;
        $suplliers->supllier_number = $request->supllier_number;
        $suplliers->supllier_address = $request->supllier_address;
        $suplliers->start_date = $request->start_date;
        $suplliers->city_area = $request->city_area;
        $suplliers->save();
        return redirect('manage-supllier');
    }

    public function deleteSupllier($id){
        $suplliers = Supllier::find($id);
        $suplliers->delete();
        return redirect()->back();
    }

    public function viewSupllier($id){
        $suplliers = Supllier::find($id);
        return view('dashboard.supllier.view-supllier', compact('suplliers'));
    }
}
