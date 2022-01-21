@extends('layouts.app')

@section('content')
<div class="container">


    <h1 class="mb-4">Les offres d'emplois</h1>
    <table class="table table-bordered">
        <THEad class="thead-dark">
            <TH>titre</TH>
            <TH>description</TH>
            <TH>etat</TH>
            <th colspan=3>Actions</th>
        </thead>
        <tbody>

            @foreach ($offres as $offre)
            <tr>
                <td> {{$offre->titre}} </td>
                <td> {{$offre->description}}</td>
                <td> {{$offre->etat}}</td>
                <td colspan=3>

                    <div class="row">

                        <a href="/offre/{{$offre->id}}" class="btn btn-outline-primary col-3"
                            style="height: 2.4rem; margin-left: 2rem;" role="button">
                            Details
                        </a>

                        <a href="{{route('offre.edit',$offre->id)}}" class="btn btn-outline-primary col-3"
                            style="height: 2.4rem; margin-left: 2rem;" role="button">
                            Edit
                        </a>

                        <form class="form-display col-4" style="" method="POST"
                            action="{{route('offre.destroy',$offre->id)}}">
                            {{csrf_field ()}}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-danger"
                                style="width: 9rem; margin-left: 1rem;">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
