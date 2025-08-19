<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStackPivot extends Model
{
    use HasFactory;

    protected $table = 'project_stack';
    
    protected $fillable = [
        'id',
        'project_id',
        'stack_id'
    ];

    // public function project()
    // {
    //     return $this->belongsTo(Project::class, 'id', 'project_id');
    // }

    // public function stack()
    // {
    //     return $this->belongsTo(ProjectStack::class, 'project_id', 'id');
    // }
}