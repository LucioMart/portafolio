<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['title', 'description', 'url'];

    public function getRouteKeyName() {
        return 'id';
    }

}
