<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    /**
     * Get the steps for the scenario.
     */
    public function steps()
    {
        return $this->hasMany('App\Step');
    }
}
