<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmissionEnquiry extends Model
{
    protected $table = 'admission_enquiries';

    protected $fillable = ['name', 'email', 'program', 'specialization','phone', 'city', 'state', 'is_checked'];
}
