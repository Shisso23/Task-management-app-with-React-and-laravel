<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'project_id'];

    public function projects(){
        return $this->hasOne(Project::class);
    }
}
