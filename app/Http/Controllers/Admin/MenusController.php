<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Menu_types;
use Str;

class MenusController extends Controller
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
        return view('admin.menus.index');
    }

    public function add() {
        $data = array();
        $data['menu_types'] = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        return view('admin.menus.add')->with($data);
    }

    public function edit($id) {
        $data = array();

        $data['menu_types'] = Menu_types::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();

        $data['menu'] = Menu::findorFail($id);
        return view('admin.menus.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'menu_type_id' => 'required',
        ], [
            'title.required' => 'Menu Title is required.',
            'slug.required' => 'Menu Link is required.',
            'menu_type_id.required' => 'Please Select Menu Type.',
        ]);
        $menu = new Menu();
        $menu->title = $request->title;
        $menu->slug = $request->slug;
        $menu->menu_type_id = $request->menu_type_id;
        $menu->menu_is = 'external';
        $menu->save();
        if ($menu->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Menu has been successfully Created!');
        }
        return redirect(route('admin.menus'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'menu_type_id' => 'required',
        ], [
            'title.required' => 'Menu Title is required.',
            'slug.required' => 'Menu Link is required.',
            'menu_type_id.required' => 'Please Select Menu Type.',
        ]);
        
        $menu = Menu::findorFail($request->id);
        $menu->title = $request->title;
        $menu->slug = $request->slug;
        $menu->menu_type_id = $request->menu_type_id;
        $menu->update();
        if ($menu->update() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'A Menu has been successfully Updated!');
        }
        return redirect(route('admin.menus'));
    }
    public function post_index(Request $request)
    {         
        $source = $request->source;
        
            if($request->destination!=''){
              $destination  =$request->destination;  
            }else{
                $destination=0;
            }
        $item             = Menu::find($source);
        $item->parent_id  = $destination;  
        $item->save();

        $ordering       = json_decode($request->order);
        $rootOrdering   = json_decode($request->rootOrder );
        
        if($ordering){
          foreach($ordering as $order=>$item_id){

            if($itemToOrder = Menu::find($item_id)){
                $itemToOrder->order = $order;
                $itemToOrder->save();
            }
          }
        } else {
          foreach($rootOrdering as $order=>$item_id){
            if($itemToOrder = Menu::find($item_id)){
                $itemToOrder->order = $order;
                $itemToOrder->save();
            }
          }
        }

        return 'ok ';
    }
    public function destroy(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'A Menu has been successfully Deleted!');
        return redirect(route('admin.menus'));
    }
}
