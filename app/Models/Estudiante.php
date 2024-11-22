<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estudiante extends Model
{
    use HasFactory;
    public $table = 'estudiantes';

    protected $fillable = array("*");

    public function cursos(){
        return $this->belongsToMany(Curso::class,"curso_estudiante");}
}
