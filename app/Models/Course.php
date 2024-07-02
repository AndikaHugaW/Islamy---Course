<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = ['judul_course', 'nama_pemateri', 'link_course', 'text_materii'];
    protected $primarykey = 'id_course';
}
