@extends('medecin.Dashbord-medcin')

@section('title','CHU | Dossiers médicaux')

@section('content')

<h2>Liste des dossiers médicaux</h2>

@if($dossiersMedicaux->isEmpty())
    <p>Aucun dossier médical disponible.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Nom du patient</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dossiersMedicaux as $dossier)
                <tr>
                    <td>{{ $dossier->patient->nom }}</td>
                    <td>{{ $dossier->patient->date_naissance }}</td>
                    <td>
                        <a href="{{ route('medecin.modifierDossierMedical', $dossier->id) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif


@endsection
