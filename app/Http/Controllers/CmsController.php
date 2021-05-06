<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModulesData;

class CmsController extends Controller
{
    public function index($slug){
        $cms = ModulesData::where('slug',$slug)->where('status','active')->first();
        return view('pages.cms')->with('cms',$cms);

    } 
}
