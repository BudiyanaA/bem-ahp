<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = [
        'alternative_id',
        'administration_id',
        'portfolio_id',
        'knowledge',
        'psikotest',
        'interview',
    ];
}
