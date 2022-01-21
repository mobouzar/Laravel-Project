@extends('layouts.app')
@section('content')

<title>Employees / offre_emploi</title>
<div class="container">
    <h1>Employes{{$employe->id}}</h1>
    <ul>
        <li>nom : {{$employe->nom}} </li>
        <li>tel : {{$employe->tel}}</li>
        <li>mail : {{$employe->mail}}</li>
    </ul>
    <iframe src="/uploads/media/default/0001/01/540cb75550adf33f281f29132dddd14fded85bfc.pdf" width="100%" height="500px">
</div>
@endsection
