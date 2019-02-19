<?php

namespace App\Http\Controllers;

use App\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function addBuyer(){
        return view('dashboard.buyers.add-buyer');
    }

    public function saveBuyer(Request $request){
        $this->validate($request,[
            'buyer_name'=> 'required',
            'contact_number'=> 'required|max:11|min:11',
            'contact_address'=> 'required',
            'total_cost'=> 'required',
            'paid_cost'=> 'required',
            'due_cost'=> 'required',
            'payment_status'=> 'required',
        ]);

        $buyers = new Buyer();
        $buyers->buyer_name = $request->buyer_name;
        $buyers->contact_number = $request->contact_number;
        $buyers->contact_address = $request->contact_address;
        $buyers->total_cost = $request->total_cost;
        $buyers->paid_cost = $request->paid_cost;
        $buyers->due_cost = $request->due_cost;
        $buyers->payment_status = $request->payment_status;
        $buyers->save();
        return redirect()->back();
    }

    public function manageBuyerInfo(){
        $buyers = Buyer::all();
        return view('dashboard.buyers.manage-buyer', ['buyers'=>$buyers]);
    }

    public function paidPayment($id){
        $buyers = Buyer::find($id);
        $buyers->payment_status = 1;
        $buyers->save();
        return redirect('/manage-buyer');
    }
    public function unpaidPayment($id){
        $buyers = Buyer::find($id);
        $buyers->payment_status = 0;
        $buyers->save();
        return redirect('/manage-buyer');
    }

    public function editInfo($id){
        $buyers = Buyer::find($id);
        return view('dashboard.buyers.edit-info', ['buyers'=>$buyers]);
    }

    public function updateInfo(Request $request){
        $this->validate($request,[
            'buyer_name'=> 'required',
            'contact_number'=> 'required|max:11|min:11',
            'contact_address'=> 'required',
            'total_cost'=> 'required',
            'paid_cost'=> 'required',
            'due_cost'=> 'required',
            'payment_status'=> 'required',
        ]);

        $buyers = Buyer::find($request->buyer_id);

        $buyers->buyer_name = $request->buyer_name;
        $buyers->contact_number = $request->contact_number;
        $buyers->contact_address = $request->contact_address;
        $buyers->total_cost = $request->total_cost;
        $buyers->paid_cost = $request->paid_cost;
        $buyers->due_cost = $request->due_cost;
        $buyers->payment_status = $request->payment_status;
        $buyers->save();
        return redirect('/manage-buyer');
    }

    public function deleteInfo($id){
        $buyers = Buyer::find($id);
        $buyers->delete();
        return redirect('/manage-buyer');
    }

    public function viewInfo($id){
        $buyers = Buyer::find($id);
        return view('dashboard.buyers.view-info', ['buyers'=>$buyers]);
    }
}
