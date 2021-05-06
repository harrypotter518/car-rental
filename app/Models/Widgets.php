<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    use HasFactory;
    public function widget_data()
    {
        return $this->hasOne('App\Models\WidgetsData','widget_id');
    }
}
