<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTechnologyPivot extends Model
{
    use HasFactory;

    protected $table = 'project_technology_pivot';
    
    protected $fillable = [
        'id',
        'project_id',
        'technology_id'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class, 'id', 'project_id');
    }

    public function technology()
    {
        return $this->belongsTo(Technology::class, 'project_id', 'id');
    }
}