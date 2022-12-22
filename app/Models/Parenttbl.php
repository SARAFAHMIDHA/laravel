<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Parenttbl extends Model
{
    use HasFactory;
    protected $fillable=['name','email'];

    public function students(){
        return $this->belongsTo(Student::class);
    }
    public function optedcourses(){
        return $this->belongsTo(optedcourse::class);
    }

}
