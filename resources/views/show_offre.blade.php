@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Offre details</h1>
    <ul>
        <li>titre : {{$offre->titre}} </li>
        <li>description : {{$offre->description}}</li>
        <li>etat : {{$offre->etat}}</li>
    </ul>

</div>

@endsection