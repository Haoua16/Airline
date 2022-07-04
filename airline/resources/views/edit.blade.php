@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier le vol</h3>
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form action="{{ route('vols.update', $vols->id) }}" method="post">
      <!-- <form method="post" action="{{ route('vols.update', $vols->id ) }}"> -->
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="destination">Destination du Vol:</label>
              <input type="text" class="form-control" name="destination" value="{{ $vols->destination }}"/>
              <label for="date_depart">Date de Départ:</label>
              <input type="text" class="form-control" name="date_depart" value="{{ $vols->date_depart }}"/>
              <label for="heure_depart">Heure de Départ:</label>
              <input type="text" class="form-control" name="heure_depart" value="{{ $vols->heure_depart }}"/>
          </div>
          <div class="form-group">
              <label for="code_vol">Code du vol :</label>
              <input type="text" class="form-control" name="code_vol" value="{{ $vols->code_vol }}"/>
          </div>
  <div class="card-header">
    Classe_A
  </div>
          <div class="form-group">
              <label for="nombre_classA">Nombre de personne :</label>
              <input type="number" class="form-control" name="nombre_classA" value="{{ $vols->nombre_classA }}"/>
              <label for="prix_classA">Prix_Class_A :</label>
              <input type="number" class="form-control" name="prix_classA" value="{{ $vols->prix_classA }}"/>
          </div>
  <div class="card-header">
    Classe_B
  </div>
          <div class="form-group">
              <label for="nombre_classB">Nombre de personne :</label>
              <input type="number" class="form-control" name="nombre_classB" value="{{ $vols->nombre_classB }}"/>
              <label for="prix_classB">Prix_Class_B :</label>
              <input type="number" class="form-control" name="prix_classB" value="{{ $vols->prix_classB }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection