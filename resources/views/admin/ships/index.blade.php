@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>VAISSEAUX</strong>
                    <a href=""><button class="btn btn-primary">Editer</button></a>
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Matricules</th>
                                <th scope="col">Modeles</th>
                                <th scope="col">Equipages</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ships as $ship)
                            <tr>
                                <th scope="row">{{ $ship->id }}</th>
                                <td>{{$ship->modele}}</td>
                                <td>{{$ship->crew}}</td>
                                <td>
                                    <a href="{{ Route('admin.ships.edit', $ship->id) }}"><button class="btn btn-primary">Editer</button></a>
                                    <a href="{{ Route('admin.ships.destroy', $ship->id) }}"><button type="submit" class="btn btn-warning">Supprimer</button></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection