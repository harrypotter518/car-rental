<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WidgetPages;
use App\Models\Widgets;
use App\Models\WidgetsData;
use Str;

class WidgetDataController extends Controller
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
        $data['page'] = WidgetPages::where('slug', $slug)->firstOrFail();
        $data['widgets'] = Widgets::where('widget_page_id',$data['page']->id)->get();
        return view('admin.widgets_data.index')->with($data);
    }


    public function store(Request $request,$id)
    {
        $widget_id = $id;
        $widget = Widgets::findorFail($widget_id);
        $dynamic_form = $request->input('dynamic_form');
        if($is_data = WidgetsData::where('widget_id',$widget_id)->first()){
            $data = WidgetsData::findorFail($is_data->id);
            $data->title = $request->title;
            $data->widget_id = $widget_id;
            $data->description = $request->description;
            $data->extra_field_1 = $request->extra_field_1;
            $data->extra_field_2 = $request->extra_field_2;
            $data->extra_field_3 = $request->extra_field_3;
            $data->extra_field_4 = $request->extra_field_4;
            $data->extra_field_5 = $request->extra_field_5;
            $data->extra_field_6 = $request->extra_field_6;
            $data->extra_field_7 = $request->extra_field_7;
            $data->extra_field_8 = $request->extra_field_8;
            $data->extra_image_1 = $request->extra_image_1;
            $data->extra_image_2 = $request->extra_image_2;

            $data->radio_button_1 = $request->radio_button_1;
            $data->radio_button_2 = $request->radio_button_2;
            $data->radio_button_3 = $request->radio_button_3;
            if(isset($dynamic_form['dynamic_form']) && null!==($dynamic_form['dynamic_form'])){
                $data->bullets = json_encode($dynamic_form['dynamic_form']);
            }
            $data->update();
        }else{
            $data = new WidgetsData();
            $data->title = $request->title;
            $data->widget_id = $widget_id;
            $data->description = $request->description;
            $data->extra_field_1 = $request->extra_field_1;
            $data->extra_field_2 = $request->extra_field_2;
            $data->extra_field_3 = $request->extra_field_3;
            $data->extra_field_4 = $request->extra_field_4;
            $data->extra_field_5 = $request->extra_field_5;
            $data->extra_field_6 = $request->extra_field_6;
            $data->extra_field_7 = $request->extra_field_7;
            $data->extra_field_8 = $request->extra_field_8;
            $data->extra_image_1 = $request->extra_image_1;
            $data->extra_image_2 = $request->extra_image_2;
            $data->radio_button_1 = $request->radio_button_1;
            $data->radio_button_2 = $request->radio_button_2;
            $data->radio_button_3 = $request->radio_button_3;
            if(isset($dynamic_form['dynamic_form']) && null!==($dynamic_form['dynamic_form'])){
                $data->bullets = json_encode($dynamic_form['dynamic_form']);
            }
            $data->save();
        }
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', $widget->title.' has been successfully Updated!');
        return redirect(route('admin.widgets_data',$request->widget_page));
    }


    public function destroy($id)
    {
        $module = Modules::findOrFail($id);
        $module->delete();
        if ($module->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'A module has been successfully Deleted!');
        }
        return redirect(route('admin.modules'));
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
