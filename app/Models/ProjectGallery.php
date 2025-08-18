<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'project_id', 'image_url'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}