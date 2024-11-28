<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DegreeProgram extends Model
{
    protected $fillable = ['university_id', 'degree_name', 'last_year_merit', 'fees','chance'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
