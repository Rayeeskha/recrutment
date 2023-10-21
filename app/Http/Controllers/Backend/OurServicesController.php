<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurService;
use App\Http\Requests\OurServiceRequest;
use DataTables;

class OurServicesController extends Controller
{
    public function index(Request $request){
    	if ($request->ajax()) {
            $data = OurService::select('id','title_en','url_en','title_ar','status','url_ar','desc_en','desc_ar','created_at',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
            return Datatables::of($data)->addIndexColumn()
                ->editColumn('created_at', function($row){
                    return date('d M Y',strtotime($row->created_at));
                })->editColumn('desc_en', function($row){
                    return strip_tags(html_entity_decode($row->desc_en)) ?? 'N/a';
                })->editColumn('status', function($row){
                    $active = $row->status == '1' ? "checked" : '';
                    $x = ($active) ? " switch3-checked " : " ";
                    return '<div class="form-check form-switch form-switch-right form-switch-md">
                        <label for="rounded-button" class="form-label text-muted '.$x.' "></label>
                        <input class="form-check-input code-switcher status_change_datatable" type="checkbox" id="rounded-button" '.$active.'>
                    </div>';    
                })->rawColumns(['status'])->make(true);
        }
    	return view('backend.our_services.index');
    }

    public function create(){
    	return view('backend.our_services.create');
    }

    public function store(OurServiceRequest $request){
    	$request->validated();
    	try {
    		OurService::create($request->all());
            return response()->json(['success' => true,'message' => 'Added successfully !','url'=>route('admin.our-services.index')],200);
    	}catch (Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
