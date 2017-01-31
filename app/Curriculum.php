<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'curriculums';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the user that owns the curriculum.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
