<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStack extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'stack_name'];
    protected $table = 'project_stack';

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'id', 'project_id');
    }
}