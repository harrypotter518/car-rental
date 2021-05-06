<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu_types;
use Str;

class MenuTypesController extends Controller
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
        $data['menu_types'] = Menu_types::get();
        return view('admin.menu_types.index')->with($data);
    }

    public function add() {
        return view('admin.menu_types.add');
    }

    public function edit($id) {
        $data = array();
        $data['menu_type'] = Menu_types::findorFail($id);
        return view('admin.menu_types.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Menu Title is required.',
        ]);
        $slug = Str::slug($request->title, '-');
        $slugs = unique_slug($slug, 'menu_types', $field = 'slug', $key = NULL, $value = NULL);
        $menu_type = new Menu_types();
        $menu_type->title = $request->title;
        $menu_type->slug = $slugs;
        $menu_type->save();
        if ($menu_type->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Menu Type has been successfully Created!');
        }
        return redirect(route('admin.menu_types'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Menu Title is required.',
        ]);
        $menu_type = Menu_types::findorFail($request->id);

        if(trim($menu_type->title) != trim($request->title)){
            $slug = Str::slug($request->title, '-');
            $slugs = unique_slug($slug, 'menu_types', $field = 'slug', $key = NULL, $value = NULL);
            $menu_type->slug = $slugs;
        }

        $menu_type->title = $request->title;
        
        $menu_type->update();
        if ($menu_type->update() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Menu Type has been successfully Updated!');
        }
        return redirect(route('admin.menu_types'));
    }

    public function destroy(Request $request, $id)
    {
        $menu_type = Menu_types::findOrFail($id);
        $menu_type->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Menu Type has been successfully Deleted!');
        return redirect(route('admin.menu_types'));
    }
}
