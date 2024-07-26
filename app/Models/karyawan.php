<?php

namespace App\Models;

use App\Http\Controllers\KaryawanController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_Office',
        'full_name',
        'address',
        'email',
        'phone',
        'status',
        'probability',
        'lead_type',
        'lead_channel',
        'lead_number',
        'lead_media',
        'lead_source',
        
    ];
}
