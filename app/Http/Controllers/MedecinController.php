<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\DossierMedical;
class MedecinController extends Controller
{
    public function index()
    {
        return view('medecin');
    }
    public function listeRendezVous()
{
    $rendezVous = RendezVous::all();
    return view('medecin.liste-rendezvous', compact('rendezVous'));
}

public function modifierRendezVous($id)
{
    $rendezVous = RendezVous::findOrFail($id);
    return view('medecin.modifier-rendezvous', compact('rendezVous'));
}

public function updateRendezVous(Request $request, $id)
{
    $request->validate([
        'date' => 'required|date',
        'motif' => 'required|string|max:255',
    ]);

    $rendezVous = RendezVous::findOrFail($id);
    $rendezVous->date = $request->date;
    $rendezVous->motif = $request->motif;
    $rendezVous->save();

    return redirect()->route('medecin.listeRendezVous')->with('success', 'Rendez-vous modifié avec succès !');
}

public function listeDossiersMedicaux()
{
    $dossiersMedicaux = DossierMedical::all();
    return view('medecin.liste-dossiers-medicaux', compact('dossiersMedicaux'));
}

public function modifierDossierMedical($id)
{
    $dossierMedical = DossierMedical::findOrFail($id);
    return view('medecin.modifier-dossier-medical', compact('dossierMedical'));
}

public function updateDossierMedical(Request $request, $id)
{
    $request->validate([
        'informations' => 'required|string',
    ]);

    $dossierMedical = DossierMedical::findOrFail($id);
    $dossierMedical->informations = $request->informations;
    $dossierMedical->save();

    return redirect()->route('medecin.listeDossiersMedicaux')->with('success', 'Dossier médical modifié avec succès !');
}
}
