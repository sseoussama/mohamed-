<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $fillable = [
        'patient_id',
        'date',
        'motif'
        ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
