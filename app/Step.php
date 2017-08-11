<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    /**
     * Define that steps belongs to Scenario
     */
    public function scenario()
    {
        return $this->belongsTo('App\Scenario');
    }
}
