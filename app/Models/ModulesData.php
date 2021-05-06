<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModulesData extends Model
{
    protected $table = 'modules_data';

    public function results()
    {
        return $this->hasMany('App\Models\ModulesData','category');
    }

    public function count()
    {
        return $this->results()->count();
    }

}
