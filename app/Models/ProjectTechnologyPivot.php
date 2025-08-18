<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTechnologyPivot extends Model
{
    use HasFactory;

    protected $table = 'project_technology';
    
    protected $fillable = [
        'project_id',
        'technology_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function technology()
    {
        return $this->belongsTo(ProjectTechnology::class, 'technology_id');
    }
}