<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offre_Emplois extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'etat'
    ];

}
