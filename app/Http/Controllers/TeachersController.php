<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;
use App\Models\Tags;

class TeachersController extends Controller
{
    public function index(Request $request){
        $results = ModulesData::where('module_id', 7)->where('status','active')->paginate(10);
        return view('teachers.index')->with('teachers',$results);
    }   

    public function detail($slug){
    	$data['teacher'] = ModulesData::where('slug',trim($slug))
    	 		->where('module_id', 7)
    	 		->where('status','active')
    	 		->first();
    	return view('teachers.detail')->with($data); 		
    }
}
