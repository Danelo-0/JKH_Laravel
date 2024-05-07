<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    protected $table = 'user_infos';

    protected $fillable = [
        'name',
        'surname',
        'middle_name',
        'passport',
        'phone',
        'inn',
        'snils',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
