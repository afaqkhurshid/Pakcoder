<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'date', 'website_url', 'description', 'active_users',
        'client_satisfaction', 'months_development', 'app_store_rating',
        'challenges', 'solutions', 'thumbnail'
    ];

    public function technologies()
    {
        // return $this->belongsToMany(ProjectTechnology::class, 'project_technology')
        //             ->using(ProjectTechnologyPivot::class)
        //             ->withTimestamps();
        return $this->hasMany(ProjectTechnology::class, 'project_id', 'id');
    }

    public function stacks()
    {
        // return $this->belongsToMany(ProjectStack::class, 'project_stack')
        //             ->using(ProjectStackPivot::class);
        return $this->belongsToMany(ProjectStack::class, 'project_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id', 'id');
    }
}