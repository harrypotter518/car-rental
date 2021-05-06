<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function menu_type()
    {
        return $this->belongsTo('App\Models\Menu_types');
    }

    public function buildMenu($menu, $parentid = 0) 
	{ 
	  $result = null;
         
	  foreach ($menu as $item) 
	    if ($item->parent_id == $parentid) { 
	      $edit_link = route('admin.menus.edit',$item->id);	
	      $del_link = route('admin.menus.delete',$item->id);	
	      $result .= "<li class='dd-item nested-list-item' id='item_{$item->id}' data-order='{$item->order}' data-id='{$item->id}' data-type='{$item->menu_type_id}'>
	      <div class='dd-handle nested-list-handle'>
	        <span class='ti-direction-alt'></span>
	      </div>
	      <div class='nested-list-content'>{$item->title}
	        <div class='pull-right' style='float: right;'>
                <a href='$edit_link'> Edit</a>|
	          <a href='$del_link' rel='{$item->id}'>Delete</a>
	        </div>
	      </div>".$this->buildMenu($menu, $item->id) . "</li>"; 
	    } 
	  return $result ?  "\n<ol class=\"dd-list\">\n$result</ol>\n" : null; 
	} 

	// Getter for the HTML menu builder
	public function getHTML($items)
	{
		return $this->buildMenu($items);
	}

	public function submenus() {
	    return $this->hasMany(Menu::class, 'parent_id', 'id');
	}
}
