<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'assignment';
    protected $fillable = ['name','list_question'];
    public $timestamps = true;
}
