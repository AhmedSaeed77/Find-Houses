<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function image()
    {
        return $this->hasMany(Image::class, 'project_id');
    }

    public function place()
    {
        return $this->belongsTo(Place::class, 'project_id');
    }

}
