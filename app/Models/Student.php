<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'date_birth', 'mom', 'dad'];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
