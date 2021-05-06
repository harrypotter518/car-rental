<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WidgetPages extends Model
{
    use HasFactory;

    public function widgets()
    {
        return $this->hasMany('App\Models\Widgets','widget_page_id');
    }
}
