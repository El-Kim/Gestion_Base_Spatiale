@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ASSIGNER : <strong>{{ $ship->name }}</strong></div>
                <div class="card-body">
                    <form action="{{ route('admin.ships.update' ,$ship)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        @foreach ($ships as $ship)
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="ships[]" value="{{ $ship->id }}" id=" {{ $ship->id }}" @foreach($ship->user as $shipUser) @if($shipUser->id===$user->id) checked
                            @endif
                            @endforeach>
                            <label for="{{ $ship->id }}" class="form-check-label">{{ $role->name }}</label>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Assigner les roles</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection