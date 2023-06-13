<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pController extends Controller
{
    //
    public function patient()
    {
        return view('patient');
    }


    public function prendreRendezVous(Request $request)
    {
        // Valider les données du formulaire de prise de rendez-vous
        $request->validate([
            'date' => 'required|date',
            'motif' => 'required|string|max:255',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Enregistrer le rendez-vous dans la base de données
        $rendezVous = new RendezVous();
        $rendezVous->patient_id = auth()->user()->id; // Supposons que le patient est authentifié
        $rendezVous->date = $request->date;
        $rendezVous->motif = $request->motif;
        $rendezVous->save();

        // Rediriger vers la page de rendez-vous et afficher un message de succès
        return redirect()->route('patient.index')->with('success', 'Rendez-vous pris avec succès !');
    }

    public function dossierMedical()
    {
        // Obtenir le dossier médical du patient authentifié
        $dossierMedical = DossierMedical::where('patient_id', auth()->user()->id)->first();

        // Afficher la page du dossier médical avec les informations
        return view('patient.dossier-medical', compact('dossierMedical'));
    }
}
