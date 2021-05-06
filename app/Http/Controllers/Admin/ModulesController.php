<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules;
use App\Models\ModulesData;
use Str;

class ModulesController extends Controller
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
    public function index()
    {
        $data = array();
        $data['modules'] = Modules::get();
        return view('admin.modules.index')->with($data);
    }

    public function add() {
        $data['categories'] = Modules::select('name', 'id')->where('status','active')->pluck('name', 'id')->toArray();
        return view('admin.modules.add')->with($data);
    }

    public function edit($id) {
        $data = array();
        $data['categories'] = Modules::select('name', 'id')->where('status','active')->pluck('name', 'id')->toArray();
        $data['module'] = Modules::findorFail($id);
        return view('admin.modules.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'term' => 'required',
        ], [
            'name.required' => 'Module Name is required.',
            'term.required' => 'Module Term is required.',
        ]);
        $slug = Str::slug($request->name, '-');
        $slugs = unique_slug($slug, 'modules', $field = 'slug', $key = NULL, $value = NULL);
        $module = new Modules();
        $module->name = $request->name;
        $module->term = $request->term;
        $module->is_slug = $request->is_slug;
        $module->is_menu = $request->is_menu;
        $module->is_description = $request->is_description;
        $module->is_seo = $request->is_seo;
        $module->category = $request->category;
        $module->multiple_category = $request->multiple_category;
        $module->tags = $request->tags;
        $module->is_image = $request->is_image;
        $module->multi_images = $request->multi_images;
        $module->parent_id = $request->parent_id;
        $module->thumbnail_height = $request->thumbnail_height;
        $module->thumbnail_width = $request->thumbnail_width;
        $module->extra_fields = $request->extra_fields;
        $module->extra_field_title_1 = $request->extra_field_title_1;
        $module->extra_field_title_2 = $request->extra_field_title_2;
        $module->extra_field_title_3 = $request->extra_field_title_3;
        $module->extra_field_title_4 = $request->extra_field_title_4;
        $module->extra_field_title_5 = $request->extra_field_title_5;
        $module->extra_field_title_6 = $request->extra_field_title_6;
        $module->extra_field_title_7 = $request->extra_field_title_7;
        $module->extra_field_title_8 = $request->extra_field_title_8;
        $module->extra_field_title_9 = $request->extra_field_title_9;
        $module->extra_field_title_10 = $request->extra_field_title_10;
        $module->extra_field_title_11 = $request->extra_field_title_11;
        $module->extra_field_title_12 = $request->extra_field_title_12;
        $module->extra_field_title_13 = $request->extra_field_title_13;
        $module->extra_field_title_14 = $request->extra_field_title_14;
        $module->extra_field_title_15 = $request->extra_field_title_15;
        $module->slug = $slugs;
        $module->save();
        if ($module->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'A module has been successfully Created!');
        }
        return redirect(route('admin.modules'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'term' => 'required',
        ], [
            'name.required' => 'Module Name is required.',
            'term.required' => 'Module Term is required.',
        ]);
        
        $module = Modules::findorFail($request->id);
        if(trim($module->name) != trim($request->name)){
            $slug = Str::slug($request->name, '-');
            $slugs = unique_slug($slug, 'modules', $field = 'slug', $key = NULL, $value = NULL);
            $module->slug = $slugs;
        }
        $module->name = $request->name;
        $module->term = $request->term;
        $module->is_slug = $request->is_slug;
        $module->is_menu = $request->is_menu;
        $module->is_description = $request->is_description;
        $module->is_seo = $request->is_seo;
        $module->category = $request->category;
        $module->multiple_category = $request->multiple_category;
        $module->tags = $request->tags;
        $module->is_image = $request->is_image;
        $module->multi_images = $request->multi_images;
        $module->parent_id = $request->parent_id;
        $module->thumbnail_height = $request->thumbnail_height;
        $module->thumbnail_width = $request->thumbnail_width;
        $module->extra_fields = $request->extra_fields;
        $module->extra_field_title_1 = $request->extra_field_title_1;
        $module->extra_field_title_2 = $request->extra_field_title_2;
        $module->extra_field_title_3 = $request->extra_field_title_3;
        $module->extra_field_title_4 = $request->extra_field_title_4;
        $module->extra_field_title_5 = $request->extra_field_title_5;
        $module->extra_field_title_6 = $request->extra_field_title_6;
        $module->extra_field_title_7 = $request->extra_field_title_7;
        $module->extra_field_title_8 = $request->extra_field_title_8;
        $module->extra_field_title_9 = $request->extra_field_title_9;
        $module->extra_field_title_10 = $request->extra_field_title_10;
        $module->extra_field_title_11 = $request->extra_field_title_11;
        $module->extra_field_title_12 = $request->extra_field_title_12;
        $module->extra_field_title_13 = $request->extra_field_title_13;
        $module->extra_field_title_14 = $request->extra_field_title_14;
        $module->extra_field_title_15 = $request->extra_field_title_15;
        
        $module->update();
        if ($module->update() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'A module has been successfully Updated!');
        }
        return redirect(route('admin.modules'));
    }

    public function destroy(Request $request, $id)
    {
        $module = Modules::findOrFail($id);
        $module->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'A module has been successfully Deleted!');
        return redirect(route('admin.modules'));
    }
}
