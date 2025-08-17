<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    use HasFactory;

    protected $fillable =['main_functions','requirements','required_languages',
    'city','studies','experience',"category",'available_positions','job_id'];

    public function JobOffer(){
        return $this->belongsTo(JobOffer::class,"job_id");
    }
}
