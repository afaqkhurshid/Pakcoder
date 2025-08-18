<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStackPivot extends Model
{
    use HasFactory;

    protected $table = 'project_stack';
    
    protected $fillable = [
        'project_id',
        'stack_id'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function stack()
    {
        return $this->belongsTo(ProjectStack::class, 'stack_id');
    }
}