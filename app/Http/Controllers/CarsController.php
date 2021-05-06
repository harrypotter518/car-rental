<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\ModulesData;

use App\Models\Tags;



class CarsController extends Controller

{

    public function index(Request $request){

        $data = ModulesData::where('module_id', 5)->where('status','active');



        if ($request->has('keyword')) {

            $data->where('title', 'like', '%'.$request->keyword.'%');

        }



        if ($request->has('category')) {

            $data->where('category', $request->category);

        }



        if ($request->has('archive')) {

            $data->whereMonth('created_at', date('m', strtotime($request->archive)))->whereYear('created_at', date('Y', strtotime($request->archive)));

        }



        if ($request->has('tag')) {

            $data->whereRaw("FIND_IN_SET($request->tag,tag_ids)");

        }



        if ($request->has('cate')) {

            $data->whereRaw("FIND_IN_SET($request->cate,category_ids)");

        }



        $arr['cars'] = $data->paginate(10);



        $arr['recent_data'] = ModulesData::where('module_id', 5)->where('status','active')->orderBy('id','desc')->take(3)->get(); 

        $arr['archives'] = $this->lastThreeMonths();

        return view('cars.index')->with($arr);

    }   



    public function detail($slug){

    	$data['blog'] = ModulesData::where('slug',trim($slug))

    	 		->where('module_id', 3)

    	 		->where('status','active')

    	 		->first();



    	$data['recent_data'] = ModulesData::where('module_id', 3)->where('id','!=',$data['blog']->id)->where('status','active')->orderBy('id','desc')->take(3)->get(); 

    	$tag_ids = explode(',', $data['blog']->tag_ids);



    	$data['tags'] = Tags::where('status','active')->whereIn('id', $tag_ids)->get();	

    	

		$data['archives'] = $this->lastThreeMonths();

    	 

    	return view('blogs.detail')->with($data); 		

    }



    function lastThreeMonths() {

	    return array(

	        date('F Y', time()),

	        date('F Y', strtotime('-1 month')),

	        date('F Y', strtotime('-2 month'))

	    );

	}

}

