<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DivisionorState extends Model
{
    protected $table = "divisionorstate";
    protected $fillable = [
        'category','name','latitude','longitude'
    ];
    public function cityinfo()
    {
        return $this->hasMany('App\Models\Admin\cityinfo','divisionor_state_id');
    }
}
