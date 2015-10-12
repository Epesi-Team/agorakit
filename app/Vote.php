<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Watson\Validating\ValidatingTrait;

class Vote extends Model {

	protected $table = 'votes';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];


	public function votable()
		{
				return $this->morphTo();
		}

}
