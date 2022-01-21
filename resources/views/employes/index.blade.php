    <title>LISTE EMPLOYEES</title>
    @extends('layouts.app')

    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <h1 class="mb-5">List des employes</h1>
                <TAble class="table table-bordered">
                    <THEad class="thead-dark">
                        <TH>NOM</TH>
                        <TH>TEL</TH>
                        <TH>MAIL</TH>
                        <TH colspan=3>Actions</TH>
                    </THEad>
                    <TBody>
                        @foreach ($employes as $employe)
                        <TR>
                            <TD>{{$employe->nom}}</TD>
                            <TD>{{$employe->tel}}</TD>
                            <TD>{{$employe->mail}}</TD>
                            <TD colspan=3>

                            <div class="row">

                                <a href="/employes/{{$employe->id}}" class="btn btn-outline-primary col-3" style="height: 2.4rem; margin-left: 2rem;" role="button">
                                    Details
                                </a>

                                <a href="{{route('employes.edit',$employe->id)}}" class="btn btn-outline-primary col-3" style="height: 2.4rem; margin-left: 2rem;" role="button">
                                    Edit
                                </a>
                            
                                <form class="form-display col-4" style="" method="POST"
                                    action="{{route('employes.destroy',$employe->id)}}">
                                    {{csrf_field ()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger" style="width: 9rem; margin-left: 1rem;">Delete</button>
                                </form>
                            </div>

                            </TD>
                        </TR>
                        @endforeach
                    </TBOdy>
                </TAble>
                <!-- <br><br>
                <a href="/employes/{{$employe->id}}">dateil de l'employe {{$employe->nom}}</a><br>
                <a href="{{route('employes.edit',$employe->id)}}">modifier employe {{$employe->nom}}</a><br>
                <form action="{{route('employes.destroy',$employe->id)}}" method="POST">
                    {{csrf_field ()}}
                    {{ method_field('DELETE') }}
                    <button type="submit">Supprimer</button>

                </form>
                <br><br><br> -->

                <nav aria-label="page">
                    {{$employes->links()}}
                </nav>
            </div>
        </div>
    </div>
    @endsection
