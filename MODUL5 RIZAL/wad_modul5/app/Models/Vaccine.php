<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\patients;

class Vaccine extends Model
{
    use HasFactory;
    public function patients(){
        return $this->hasMany(patients::class, "vaccine_id");
    }
}
