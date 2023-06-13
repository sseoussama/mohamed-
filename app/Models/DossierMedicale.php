<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DossierMedical extends Model
{
    protected $fillable = [
        'name',
        'informations'

        ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
