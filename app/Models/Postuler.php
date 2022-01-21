<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postuler extends Model
{

    use HasFactory;

    protected $fillable = [
        'offre__emplois_id',
        'employe_id',
        'date'
    ];

    public function offre_emplois()
    {
        // return $this->belongsTo([offre_emplois::class,'offre__emplois_id']);
        return $this->belongsTo('App\Models\offre_Emplois','offre__emplois_id');
    }

    public function employer()
    {
        // return $this->belongsTo([Employes::class,'employe_id']);
        return $this->belongsTo('App\Models\Employes','employe_id');

    }
}
