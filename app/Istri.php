<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Istri extends Model
{
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = ['nama', 'tanggal_lahir', 'alamat'];

	public function istris()
	{
		return $this->hasMany(Istri::class);
	}
}
