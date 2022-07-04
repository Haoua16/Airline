@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3>Modifier la reservation</h3>
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
      <form method="post" action="{{ route('reservation.update', $reservation->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="Renseignements"><h3>Renseignements:</h3></label>
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" value="{{ $reservation->nom }}"/>
              <label for="prenom">Prénom:</label>
              <input type="text" class="form-control" name="prenom" value="{{ $reservation->prenom }}"/>
              <label for="sexe">Sexe:</label>
              <select name="sexe" id="Class-select">
              <option value="femme">Femme</option>
              <option value="homme">Homme</option>
              </select>
          </div>
          <div class="form-group">
            <label for="class">Choisir Classe:</label>
            <select name="class" id="Class-select">
            <option value="class_A">Classe_A</option>
            <option value="class_B">Classe_B</option>
            </select>
          </div></br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection