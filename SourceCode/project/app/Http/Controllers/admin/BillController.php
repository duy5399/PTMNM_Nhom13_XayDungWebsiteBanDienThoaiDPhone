<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BillDetailModel;
use App\Models\admin\BillModel;
use Illuminate\Http\Request;

class BillController extends Controller
{
    //
    public function getBill(){
        $data['billlist'] = BillModel::orderBy('bill_id','desc')->paginate(6);
        return view('admin.Bill.bill-list', $data);
    }

    public function getUpdateBillStatus(Request $request){
        
        $bill = BillModel::find($request->bill_id);
        $bill->status = '1';
        $bill->save();
    }

    public function getBillDetail($id){
        $data['billdetail'] = BillDetailModel::where('bill_id',$id)->get();
        $data['bill'] = BillModel::where('bill_id',$id)->get();
        return view('admin.Bill.billdetail', $data);
    }
}
