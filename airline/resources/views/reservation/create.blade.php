<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h2>Reserver un Vol</h2>
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

      <form method="post" action="{{ route('reservation.store') }}">
.         @csrf
          <div class="form-group">
              <label for="Renseignements"><h3>Renseignements</h3></label></br>
              <label for="nom">Nom:</label>
              <input type="text" class="new" name="nom"/>
              <label for="prenom">Prénom:</label>
              <input type="text" class="new" name="prenom"/>
              <label for="sexe">Sexe:</label>
              <select name="sexe" id="Class-select">
              <option value="femme">Femme</option>
              <option value="homme">Homme</option>
              </select>
          </div></br>
 
          <div class="form-group">
 
              <label for="class">Choisir Classe:</label>
              <select name="class" id="Class-select">
              <option value="class_A">Classe_A</option>
              <option value="class_B">Classe_B</option>
              </select>
          </div></br>
        <div class="form-group">
          <label for="vols_id">Destination</label>
          <select name="vols_id" id="Class-select">
            @foreach($vols as $vols)
            <option value="{{$vols->id}}">{{$vols->destination}}</option>
          @endforeach
              </select>
        </div></br>
 
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection