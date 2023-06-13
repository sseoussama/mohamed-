@extends('patient.index')

@section('title','CHU | prendre rendu vous ')

@section('content')

<form method="POST" action="">
    @csrf

    <label for="date">Date du rendez-vous:</label>
    <input type="date" name="date" required>

    <label for="motif">Motif de la consultation:</label>
    <input type="text" name="motif" required>

    <button type="submit">Prendre rendez-vous</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

@endsection
