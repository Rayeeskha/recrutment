<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use DataTables;

class ContactUsController extends Controller
{
    public function index(Request $request){
    	if ($request->ajax()) {
            $data = Contact::select('id','name','email','phone','subject','message','created_at',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
            return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function($row){
                    return date('d M Y',strtotime($row->created_at));
                })->rawColumns(['status'])->make(true);
        }
    	return view('backend.contact_us.index');
    }

    
}
