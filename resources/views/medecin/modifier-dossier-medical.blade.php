@extends('medecin.Dashbord-medcin')

@section('title','CHU | Modifier un  dossier médical ')

@section('content')

<h2>Modifier le dossier médical</h2>

<form action="{{ route('medecin.updateDossierMedical', $dossierMedical->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="informations">Informations :</label>
        <textarea name="informations" id="informations" rows="4" required>{{ $dossierMedical->informations }}</textarea>
    </div>

    <button type="submit">Modifier</button>
</form>

@endsection
