<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'exam';
    protected $fillable = ['id_level','id_lesson','name','list_assignment','duration'];
    public $timestamps = true;
}
