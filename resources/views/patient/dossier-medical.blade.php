@extends('patient.index')

@section('title','CHU | Dossier Médicale ')

@section('content')

<h2>Dossier médical</h2>

@if($dossierMedical)
    <p>Nom du patient: {{ $dossierMedical->patient->nom }}</p>
    <p>Date de naissance: {{ $dossierMedical->patient->date_naissance }}</p>
    <!-- Affichez d'autres informations du dossier médical ici -->
@else
    <p>Aucun dossier médical trouvé.</p>
@endif

@endsection
