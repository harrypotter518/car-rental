<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_types extends Model
{
    protected $table = 'menu_types';
    public function menus()
    {
        return $this->hasMany('App\Menu');
    }

}
