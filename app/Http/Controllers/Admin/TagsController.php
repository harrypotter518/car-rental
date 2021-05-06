<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;
use Str;

class TagsController extends Controller
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
        $data['tags'] = Tags::get();
        return view('admin.tags.index')->with($data);
    }

    public function add() {
        return view('admin.tags.add');
    }

    public function edit($id) {
        $data = array();
        $data['tag'] = Tags::findorFail($id);
        return view('admin.tags.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Menu Title is required.',
        ]);
        $slug = Str::slug($request->title, '-');
        $slugs = unique_slug($slug, 'tags', $field = 'slug', $key = NULL, $value = NULL);
        $tag = new Tags();
        $tag->title = $request->title;
        $tag->slug = $slugs;
        $tag->save();
        if ($tag->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Tag has been successfully Created!');
        }
        return redirect(route('admin.tags'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Menu Title is required.',
        ]);
        $tag = Tags::findorFail($request->id);

        if(trim($tag->title) != trim($request->title)){
            $slug = Str::slug($request->title, '-');
            $slugs = unique_slug($slug, 'tags', $field = 'slug', $key = NULL, $value = NULL);
            $tag->slug = $slugs;
        }

        $tag->title = $request->title;
        
        $tag->update();
        if ($tag->update() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Tag has been successfully Updated!');
        }
        return redirect(route('admin.tags'));
    }

    public function destroy(Request $request, $id)
    {
        $tag = Tags::findOrFail($id);
        $tag->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Tag has been successfully Deleted!');
        return redirect(route('admin.tags'));
    }
}
