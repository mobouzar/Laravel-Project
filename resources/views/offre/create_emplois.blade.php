@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('offre.store')}}" method="POST">
        @csrf
        <table>
            <div>
                <label class="form-label">TITRE</label>
                <input type="text" class="form-control" name="titre" placeholder="titre">
            </div><br><br>
            <div>
                <label class="form-label">description</label>
                <input type="text" class="form-control" name="description" placeholder="description">
            </div>
            <br><br>


            <div>
                <button class="btn btn-primary btn-lg" name="valider" type="submit">Submit</button>
            </div>
        </table>
    </form>
</div>
@endsection
