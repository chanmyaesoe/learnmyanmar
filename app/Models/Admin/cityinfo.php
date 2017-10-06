<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class cityinfo extends Model
{
	protected $table = "cityinfo";
    protected $fillable = [
        'population'
    ];
    public function divisionorstate()
    {
        return $this->belongsTo('App\Models\Admin\DivisionorState','divisionor_state_id');
    }
}
