<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTechnology extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];
    protected $table = 'project_technologies';

    public function projects()
    {
        // return $this->belongsToMany(Project::class, 'id', 'project_id');
        return $this->belongsToMany(Project::class, 'project_technology', 'technology_id', 'project_id');
    }
}