<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =["title",'description','year','location','image',"category_id"];

    public function ProjectCategorie(){
        return $this->belongsTo(ProjectCategorie::class, "category_id");
    }
}
