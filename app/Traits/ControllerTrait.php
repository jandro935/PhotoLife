<?php

namespace App\Traits;

use App\Models\State;

trait ControllerTrait
{
    /**
     * Get Photos States.
     *
     * @return mixed
     */
    public static function getStates()
    {
        $states = State::get();

        return $states;
    }
}
