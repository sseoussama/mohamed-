@extends('medecin.Dashbord-medcin')

@section('title','CHU | Modifier un rendez-vous')

@section('content')

<h2>Modifier le rendez-vous</h2>

<form action="{{ route('medecin.updateRendezVous', $rendezVous->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="date">Date :</label>
        <input type="date" name="date" id="date" value="{{ $rendezVous->date }}" required>
    </div>

    <div>
        <label for="motif">Motif :</label>
        <input type="text" name="motif" id="motif" value="{{ $rendezVous->motif }}" required>
    </div>

    <button type="submit">Modifier</button>
</form>


@endsection
