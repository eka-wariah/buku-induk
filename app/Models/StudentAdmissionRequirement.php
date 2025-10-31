<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAdmissionRequirement extends Model
{
    use HasFactory, SoftDeletes ;
    protected $table = 'student_admission_requirements';
    protected $primaryKey = 'sar_id';
    protected $guarded = [];

    const CREATED_AT = 'sar_created_at';
    const UPDATED_AT = 'sar_updated_at';
    const DELETED_AT = 'sar_deleted_at';
}
