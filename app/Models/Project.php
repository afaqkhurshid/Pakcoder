<?php

namespace App\Models;

use App\Models\Technology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ProjectTechnologyPivot;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'id', 'name', 'slug', 'start_date', 'end_date', 'description', 'website_url', 'active_users',
        'client_satisfaction', 'months_development', 'app_store_rating',
        'challenges', 'solutions', 'thumbnail'
    ];

    public function technologies()
    {
        
        // return $this->belongsToMany(Technology::class, 'project_technology')
        //             ->using(ProjectTechnologyPivot::class)
        //             ->withTimestamps();
        // return $this->belongsToMany(ProjectTechnologyPivot::class, 'project_id', 'id');
        return $this->belongsToMany(Technology::class, 'project_technology_pivot', 'project_id', 'technology_id');
    }

    public function stacks()
    {
        // return $this->belongsToMany(Stacks::class, 'project_stack')
        //             ->using(ProjectStackPivot::class);
        // return $this->belongsToMany(ProjectStackPivot::class, 'project_id', 'id');
        return $this->belongsToMany(Stacks::class, 'project_stack_pivot', 'project_id', 'stack_id');
    }

    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id', 'id');
        // return $this->hasMany(ProjectGallery::class, 'project_id');
    }
}