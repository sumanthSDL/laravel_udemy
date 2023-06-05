<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function rPhone()
    {
        return $this->hasMany(Phone::class);
    }

    // Define relationships or additional methods here
}


// protected $fillable = [
//     'student_id',
//     'name',
//     'email',
//     'phone',
//     // Add more column names here
// ];