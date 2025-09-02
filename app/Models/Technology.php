<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'slug'];
    protected $table = 'technologies';

    public function projects()
    {
        // return $this->belongsToMany(Project::class, 'id', 'project_id');
        return $this->belongsToMany(Project::class, 'project_technology_pivot', 'technology_id', 'project_id');
    }
}