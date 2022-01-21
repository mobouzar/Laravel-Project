@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-bordered">
        
        <THEad class="thead-dark">
            <TH>id</TH>
            <TH>nom</TH>
            <TH>titre</TH>
            <TH>date</TH>
            <th>Action</th>
        </THEad>
        <Tbody>
        @forelse ($postuler as $postuler)
            <tr>

                <td>{{ $postuler->id }}</td>
                {{-- <td>{{ $postuler->employer->nom }}</td> --}}
                <td>{{ $postuler->nom }}</td>
                {{-- <td>{{ $postuler->offre_emplois->titre }}</td> --}}
                <td>{{ $postuler->titre }}</td>
                <td>{{ $postuler->date }}</td>

                <td colspan=2>
                    <div class="row">

                        <a href="{{ route('postuler.edit', ['postuler' => $postuler->id_postuler]) }}" class="btn btn-outline-primary col-5" style="height: 2.4rem; margin-left: 2rem;" role="button">
                            Edit
                        </a>
                    
                        <form class="form-display col-6" method="POST"
                            action="{{ route('postuler.destroy', ['postuler' => $postuler->id_postuler]) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-outline-danger">Delete postuler</button>
                        </form>
                    </div>

                </td>
            </tr>
            <!-- @empty -->
            <span class="badge badge-danger">Not Found</span>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
