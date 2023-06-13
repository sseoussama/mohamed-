@extends('medecin.Dashbord-medcin')

@section('title','CHU | Rendez-vous')

@section('content')

<h2>Liste des rendez-vous</h2>

@if($rendezVous->isEmpty())
    <p>Aucun rendez-vous disponible.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Nom du patient</th>
                <th>Date</th>
                <th>Motif</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rendezVous as $rdv)
                <tr>
                    <td>{{ $rdv->patient->nom }}</td>
                    <td>{{ $rdv->date }}</td>
                    <td>{{ $rdv->motif }}</td>
                    <td>
                        <a href="{{ route('medecin.modifierRendezVous', $rdv->id) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif


@endsection
