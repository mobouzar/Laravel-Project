@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('postuler.update', $postuler->id)}}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <div class="col-6">
                <div class="form-label">
                    <label for="offre_emplois">offre_emplois</label>
                    <select name="offre__emplois_id" id="" class="form-control">
                        <!-- <option value="" selected></option> -->

                        @foreach ($offre_emplois as $offre)
                        <option {{ old('offre', $postuler->offre__emplois_id ?? null) == $offre->id ? 'selected' : '' }}
                            value="{{ $offre->id }}">{{ $offre->titre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br><br>
            <div class="col-6">
                <div class="form-label">
                    <label for="employer">employer</label>
                    <select name="employe_id" id="" class="form-control">
                        <!-- <option value="" selected></option> -->

                        @foreach ($employer as $employe)
                        <option {{ old('employe', $postuler->employe_id ?? null) == $employe->id ? 'selected' : '' }}
                            value="{{ $employe->id }}">{{ $employe->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br><br>
            <div class="col-6">
                <label class="form-label">DATE</label>
                <input type="date" class="form-control" name="date" placeholder="date">
            </div><br><br>


            <div class="col-6">
                <button class="btn btn-primary" name="valider" type="submit">Submit</button>
            </div>
        </table>
    </form>
</div>
@endsection
