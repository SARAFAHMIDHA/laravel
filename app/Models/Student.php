<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Student extends Model
{
    use HasFactory;
    protected $fillable =['name','Fk_parent_id','gender'];

    public function parenttbls(){
        return $this->hasMany(Parenttbls::class,'name','email');
    }
}
