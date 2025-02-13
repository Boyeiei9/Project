<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'position', 'years_of_experience'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_employee');
    }
}
