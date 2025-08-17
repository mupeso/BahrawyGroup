<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;


    protected $fillable =['job_id','path','comment','subject','email','name'];

    public function JobOffer(){
        return $this->belongsTo(JobOffer::class,"job_id");
    }
}
