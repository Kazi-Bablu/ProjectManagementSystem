<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    //
    protected  $fillable = [
        'project_id',
        'user_id'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
