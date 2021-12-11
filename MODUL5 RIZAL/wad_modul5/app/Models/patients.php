<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vaccine;

class patients extends Model
{
    use HasFactory;
    public function Vaccine()
    {
      return $this->belongsTo(Vaccine::class);
    }
}
