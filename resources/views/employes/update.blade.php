@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('employes.update',$employe->id)}}" method="POST">
        {{csrf_field ()}}
        {{ method_field('PATCH') }}
        <table>
            <div>
                <label class="form-label">NOM</label>
                <input type="text" class="form-control" value="{{$employe->nom}}" name="nom" placeholder="nom">
            </div>
            <div>
                <label class="form-label">TEL</label>
                <input type="text" class="form-control" value="{{$employe->tel}}" name="tel" placeholder="tel">
            </div><br>
            <div>
                <label class="form-label">mail</label>
                <input type="email" class="form-control" value="{{$employe->mail}}" name="mail" placeholder="mail">
            </div><br>
            <div>
                <label class="form-label">password</label>
                <input type="password" class="form-control" value="{{$employe->password}}" name="password"
                    placeholder="password">
            </div><br>
            <div>
                <label class="form-label">CV</label>
                <input type="file" class="form-control" value="{{$employe->cv}}" name="cv" placeholder="cv">
            </div><br>

            <div>
                <button class="btn btn-primary" name="valider" type="submit">Submit</button>
            </div>
        </table>
    </form>
</div>
@endsection
