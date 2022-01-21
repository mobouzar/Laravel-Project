@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('offre.update',$offre->id)}}" method="POST">
        {{csrf_field ()}}
        {{ method_field('PATCH') }}
        <table>
            <div>
                <label class="form-label">Titre</label>
                <input type="text" class="form-control" value="{{$offre->titre}}" name="titre" placeholder="titre">
            </div> <br/>
            <div>
                <label class="form-label">Description</label>
                <input type="text" class="form-control" value="{{$offre->description}}" name="description"
                    placeholder="description">
            </div><br>
            <div>
                <label class="form-label">Etat</label>
                <input type="text" class="form-control" value="{{$offre->etat}}" name="etat" placeholder="etat">
            </div><br>


            <div>
                <button class="btn btn-primary" name="valider" type="submit">Submit</button>
            </div>
        </table>
    </form>
</div>
@endsection
