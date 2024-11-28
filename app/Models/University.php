<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $guarded=[];

    public function degreeProgramsHigh()
    {
        return $this->hasMany(DegreeProgram::class)->where('chance','1');
    }
    public function degreeProgramsLow()
    {
        return $this->hasMany(DegreeProgram::class)->where('chance','2');
    }
}
