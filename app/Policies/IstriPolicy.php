<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class IstriPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
    * Determine if the given user can delete the given overtime
    *
    * @param Istri $istri
    * @return boolean
    */

    public function destroy(Istri $istri /** Overtime $overtima */)
    {
        // return $istri-> id === $overtime->user_id;
        return $istri;
    }
}
