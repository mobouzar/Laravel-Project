@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('employes.store')}}" method="POST">
                @csrf
                <table>
                    <div class="col-12">
                        <label class="form-label">NOM</label>
                        <input type="text" class="form-control" name="nom" placeholder="nom">
                    </div>
                    <div class="col-12">
                        <label class="form-label">TEL</label>
                        <input type="text" class="form-control" name="tel" placeholder="tel">
                    </div>
                    <div class="col-12">
                        <label class="form-label">EMAIL</label>
                        <input type="email" class="form-control" name="mail" placeholder="email">
                    </div><br>
                    <div class="col-12">
                        <label class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" name="password" placeholder="pwd">
                    </div><br>
                    <div class="col-12">
                        <label class="form-label">CV</label>
                        <input type="file" class="form-control" name="cv" placeholder="cv">
                    </div><br>

                     <!-- <div class="col-12">
                      <label class="form-label">Cv</label>
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    </div> -->

                    <div class="col-12">
                        <button class="btn btn-primary btn-lg" name="valider" type="submit">Valider</button>
                    </div>

                </table>
            </form>
        </div>
    </div>
</div>
@endsection
