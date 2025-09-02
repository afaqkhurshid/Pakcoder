<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stacks extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'slug'];
    protected $table = 'stacks';

    public function projects()
    {
        // dd($this->id);
        // return $this->belongsToMany(Project::class, 'id', 'project_id');
        return $this->belongsToMany(Project::class, 'project_stack_pivot', 'stack_id', 'project_id');
    }
}