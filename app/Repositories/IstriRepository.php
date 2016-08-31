<?php

namespace App\Repositories;

use App\User;
use App\Istri;

class IstriRepository
{
	
	public function forUser(Istri $istri)
	{
		return $istri->istris()
					 ->orderBy('created_at', 'asc')
					 ->get();
	}

}