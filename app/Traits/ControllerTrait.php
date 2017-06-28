<?php

namespace App\Traits;

use App\Models\Photo;
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

    /**
     * Search single photo by ID.
     *
     * @param $id
     * @return mixed
     */
    public static function searchPhoto($id)
    {
        $photo = Photo::findOrFail($id);

        return $photo;
    }
}
