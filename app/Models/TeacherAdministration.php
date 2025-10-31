<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherAdministration extends Model
{
    use HasFactory, SoftDeletes ;
    protected $table = 'teacher_administrations';
    protected $primaryKey = 'tad_id';
    protected $guarded = [];

    const CREATED_AT = 'tad_created_at';
    const UPDATED_AT = 'tad_updated_at';
    const DELETED_AT = 'tad_deleted_at';
}
