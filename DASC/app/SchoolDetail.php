<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolDetail extends Model
{
    protected $fillable = ['school_name','location','education_type','campus','school_student',
        'school_teacher','school_classroom','version','science_lab','computer_lab','total_computer','computer_teacher',
        'library','toilet','mpo_occupied','publication_status'];
}
