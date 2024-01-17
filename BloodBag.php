<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBag extends Model
{
    use HasFactory;

    protected $table = 'blood_bags'; // Ensure the correct table name

    protected $fillable = [
        'blood_type',
        'no_packs',
    ];
}
