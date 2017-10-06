<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FamousPlace extends Model
{
	protected $table = "famousplace";
    protected $fillable = [
        'population'
    ];
    public function divisionorstate()
    {
        return $this->belongsTo('App\Models\Admin\DivisionorState','divisionor_state_id');
    }
    public function cityinfo()
    {
        return $this->belongsTo('App\Models\Admin\cityinfo','cityinfo_id');
    }
}
