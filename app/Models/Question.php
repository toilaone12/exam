<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'question';
    protected $fillable = ['name','answer_a','answer_b','answer_c','answer_d','answer'];
    public $timestamps = true;
}
