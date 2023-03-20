<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = ['compname', 'compimage'];

    public function project()
    {
        return $this->hasMany(Project::class, 'project_id');
    }

}
