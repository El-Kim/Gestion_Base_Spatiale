@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>EQUIPAGES</strong>
                    <a href=""><button class="btn btn-primary">Editer</button></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Matricules</th>
                                <th scope="col">Noms</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    <a href="{{ Route('admin.users.edit', $user->id) }}"><button class="btn btn-primary">Editer</button></a>
                                    <form action="{{ Route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning">Supprimer</button>
                                    </form>
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