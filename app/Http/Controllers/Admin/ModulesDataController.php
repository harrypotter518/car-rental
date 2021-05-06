<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\Menu_types;
use App\Models\ModulesData;
use App\Models\Tags;
use App\Models\Menu;
use Str;

class ModulesDataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug = '')
    {
        $data = array();
        $data['module'] = Modules::where('slug', $slug)->firstOrFail();
        return view('admin.modules_data.index')->with($data);
    }

    public function add($slug) {
        $data = array();
        $data['module'] = Modules::where('slug', $slug)->firstOrFail();
        $data['menu_types'] = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        if(null!==($data['module']->parent_id)){
            $data['categories'] = ModulesData::select('title', 'id')->where('module_id',$data['module']->parent_id)->where('status','active')->pluck('title', 'id')->toArray();
        }
        $data['tags'] = Tags::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        return view('admin.modules_data.add')->with($data);
    }

    public function edit($slug,$id) {
        $data = array();$data['module'] = Modules::where('slug', $slug)->firstOrFail();
        $data['menu_types'] = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        if(null!==($data['module']->parent_id)){
            $data['categories'] = ModulesData::select('title', 'id')->where('module_id',$data['module']->parent_id)->where('status','active')->pluck('title', 'id')->toArray();
        }
        $data['tags'] = Tags::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        $data['module_data'] = ModulesData::findorFail($id);
        return view('admin.modules_data.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Title is required.',
        ]);
        $slug = $request->slug;
        $slugs = unique_slug($slug, 'modules_data', $field = 'slug', $key = NULL, $value = NULL);
        $data = new ModulesData();
        $data->title = $request->title;
        $data->slug = $slugs;
        $data->description = $request->description;
        $data->category = $request->category;

        $data->module_id = $request->module_id;





        if (null!==($request->category_ids)) {
            $data->category_ids = implode(",", $request->category_ids);
        }

        $data->extra_field_1 = $request->extra_field_1;
        $data->extra_field_2 = $request->extra_field_2;
        $data->extra_field_3 = $request->extra_field_3;
        $data->extra_field_4 = $request->extra_field_4;
        $data->extra_field_5 = $request->extra_field_5;
        $data->extra_field_6 = $request->extra_field_6;
        $data->extra_field_7 = $request->extra_field_7;
        $data->extra_field_8 = $request->extra_field_8;
        $data->extra_field_9 = $request->extra_field_9;
        $data->extra_field_10 = $request->extra_field_10;
        $data->extra_field_11 = $request->extra_field_11;
        $data->extra_field_12 = $request->extra_field_12;
        $data->extra_field_13 = $request->extra_field_13;
        $data->extra_field_14 = $request->extra_field_14;
        $data->extra_field_15 = $request->extra_field_15;

        if (null!==($request->tag_ids)) {
            $data->tag_ids = implode(",", $request->tag_ids);
        }

        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        if($request->attached_file!=''){
            $data->image = $request->attached_file;
        }
        if($request->attached_files!=''){
            $data->images = $request->attached_files;
        }
       
        $data->save();

        $menu_types = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        if(null!==($menu_types)){
            foreach($menu_types as $key => $menu_type){
                $field = 'menu_'.$key;
                if($request->$field){
                    $menu = new Menu();
                    $menu->title = $data->title;
                    $menu->slug = $data->slug;
                    $menu->menu_type_id = $key;
                    $menu->post_id = $data->id;
                    $menu->parent_id = 0;
                    $menu->order    = Menu::max('order')+1;
                    $menu->menu_is = 'internal';
                    $menu->save();
                }
            }
        }


        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', $request->module_term.' has been successfully Created!');
        return redirect(route('admin.modules.data',$request->module_slug));
    }

    public function update(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Title is required.',
        ]);
        $slug = $request->slug;
        //$slugs = unique_slug($slug, 'modules_data', $field = 'slug', $key = NULL, $value = NULL);
        $data = ModulesData::findorFail($request->id);
        $data->title = $request->title;
        $data->slug = $slug;
        $data->description = $request->description;
        $data->category = $request->category;

        $data->module_id = $request->module_id;





        if (null!==($request->category_ids)) {
            $data->category_ids = implode(",", $request->category_ids);
        }

        $data->extra_field_1 = $request->extra_field_1;
        $data->extra_field_2 = $request->extra_field_2;
        $data->extra_field_3 = $request->extra_field_3;
        $data->extra_field_4 = $request->extra_field_4;
        $data->extra_field_5 = $request->extra_field_5;
        $data->extra_field_6 = $request->extra_field_6;
        $data->extra_field_7 = $request->extra_field_7;
        $data->extra_field_8 = $request->extra_field_8;
        $data->extra_field_9 = $request->extra_field_9;
        $data->extra_field_10 = $request->extra_field_10;
        $data->extra_field_11 = $request->extra_field_11;
        $data->extra_field_12 = $request->extra_field_12;
        $data->extra_field_13 = $request->extra_field_13;
        $data->extra_field_14 = $request->extra_field_14;
        $data->extra_field_15 = $request->extra_field_15;

        if (null!==($request->tag_ids)) {
            $data->tag_ids = implode(",", $request->tag_ids);
        }

        $data->meta_title = $request->meta_title;
        $data->meta_keywords = $request->meta_keywords;
        $data->meta_description = $request->meta_description;
        if($request->attached_file!=''){
            $data->image = $request->attached_file;
        }

        if($request->attached_files!=''){
            $data->images = $request->attached_files;
        }
       
        $data->update();

        $menu_types = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        
        if(null!==($menu_types)){
            foreach($menu_types as $key => $menu_type){
                $posted_menu = Menu::where('post_id',$data->id)->where('menu_type_id', $key)->first();
                /*if(null!==($post_menus))
                {
                   foreach ($post_menus as $key => $value) {
                        $post_menu = Menu::findorFail($value->id);
                        $post_menu->delete();
                    } 
                }*/


                $field = 'menu_'.$key;
                if(null==($posted_menu)){
                    if($request->$field){
                        $menu = new Menu();
                        $menu->title = $data->title;
                        $menu->slug = $data->slug;
                        $menu->menu_type_id = $key;
                        $menu->post_id = $data->id;
                        $menu->parent_id = 0;
                        $menu->order    = Menu::max('order')+1;
                        $menu->menu_is = 'internal';
                        $menu->save();
                    }
                }else{
                    if($request->$field==''){
                        $item = Menu::where('post_id',$data->id)->where('menu_type_id', $key)->delete();
                    }
                }
            }
        }


        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', $request->module_term.' has been successfully Updated!');
        return redirect(route('admin.modules.data',$request->module_slug));
    }

    public function destroy(Request $request,$slug,$id)
    {
        $data = ModulesData::findOrFail($id);
        $data->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Successfully Deleted!');
        return redirect()->back();
    }

    public function update_status($id = '', $current_staus = '')
    {
        if ($id == '') {
            echo 'error';
            exit;
        }
        if ($current_staus == '') {
            echo 'invalid current status provided.';
            exit;
        }
        if ($current_staus == 'active')
            $new_status = 'blocked';
        else
            $new_status = 'active';
        $module = ModulesData::findOrFail($id);
        $module->status = $new_status;
        $module->update();
        echo $new_status;
        exit;
    }
}
