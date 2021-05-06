<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Widgets;
use App\Models\WidgetPages;
use Str;

class WidgetsController extends Controller
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
        $data['widgets'] = Widgets::get();
        return view('admin.widgets.index')->with($data);
    }

    public function add() {
        $data['widget_pages'] = WidgetPages::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        return view('admin.widgets.add')->with($data);
    }

    public function edit($id) {
        $data = array();
        $data['widget_pages'] = WidgetPages::select('title', 'id')->where('status','active')->pluck('title', 'id')->toArray();
        $data['widget'] = Widgets::findorFail($id);
        return view('admin.widgets.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Widget Title is required.',
        ]);
        $widget = new Widgets();
        $widget->title = $request->title;
        $widget->widget_page_id = $request->widget_page_id;
        $widget->is_description = $request->is_description;
        $widget->extra_fields = $request->extra_fields;
        $widget->extra_field_title_1 = $request->extra_field_title_1;
        $widget->extra_field_title_2 = $request->extra_field_title_2;
        $widget->extra_field_title_3 = $request->extra_field_title_3;
        $widget->extra_field_title_4 = $request->extra_field_title_4;
        $widget->extra_field_title_5 = $request->extra_field_title_5;
        $widget->extra_field_title_6 = $request->extra_field_title_6;
        $widget->extra_field_title_7 = $request->extra_field_title_7;
        $widget->extra_field_title_8 = $request->extra_field_title_8;


        $widget->is_extra_image_title_1 = $request->is_extra_image_title_1;
        $widget->extra_image_title_1 = $request->extra_image_title_1;
        $widget->extra_image_1_height = $request->extra_image_1_height;
        $widget->extra_image_1_width = $request->extra_image_1_width;

        $widget->is_extra_image_title_2 = $request->is_extra_image_title_2;
        $widget->extra_image_title_2 = $request->extra_image_title_2;
        $widget->extra_image_2_height = $request->extra_image_2_height;
        $widget->extra_image_2_width = $request->extra_image_2_width;

        $widget->radio_buttons = $request->radio_buttons;
        $widget->radio_button_title_1 = $request->radio_button_title_1;
        $widget->radio_button_title_2 = $request->radio_button_title_2;
        $widget->radio_button_title_3 = $request->radio_button_title_3;

        $widget->is_bullets = $request->is_bullets;

        $widget->save();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'A widget has been successfully Created!');
        return redirect(route('admin.widgets'));
    }

    public function update(Request $request)
    {
         $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'Widget Title is required.',
        ]);
        $widget = Widgets::findorFail($request->id);
        $widget->title = $request->title;
        $widget->widget_page_id = $request->widget_page_id;
        $widget->is_description = $request->is_description;
        $widget->extra_fields = $request->extra_fields;
        $widget->extra_field_title_1 = $request->extra_field_title_1;
        $widget->extra_field_title_2 = $request->extra_field_title_2;
        $widget->extra_field_title_3 = $request->extra_field_title_3;
        $widget->extra_field_title_4 = $request->extra_field_title_4;
        $widget->extra_field_title_5 = $request->extra_field_title_5;
        $widget->extra_field_title_6 = $request->extra_field_title_6;
        $widget->extra_field_title_7 = $request->extra_field_title_7;
        $widget->extra_field_title_8 = $request->extra_field_title_8;


        $widget->is_extra_image_title_1 = $request->is_extra_image_title_1;
        $widget->extra_image_title_1 = $request->extra_image_title_1;
        $widget->extra_image_1_height = $request->extra_image_1_height;
        $widget->extra_image_1_width = $request->extra_image_1_width;

        $widget->is_extra_image_title_2 = $request->is_extra_image_title_2;
        $widget->extra_image_title_2 = $request->extra_image_title_2;
        $widget->extra_image_2_height = $request->extra_image_2_height;
        $widget->extra_image_2_width = $request->extra_image_2_width;

        $widget->radio_buttons = $request->radio_buttons;
        $widget->radio_button_title_1 = $request->radio_button_title_1;
        $widget->radio_button_title_2 = $request->radio_button_title_2;
        $widget->radio_button_title_3 = $request->radio_button_title_3;
        
        $widget->is_bullets = $request->is_bullets;

        $widget->update();

        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'A widget has been successfully Updated!');

        return redirect(route('admin.widgets'));
    }

    public function destroy(Request $request, $id)
    {
        $widget = Widgets::findOrFail($id);
        $widget->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'A widget has been successfully Deleted!');
        return redirect(route('admin.widgets'));
    }
}
