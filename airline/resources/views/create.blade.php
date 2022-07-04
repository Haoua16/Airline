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
    <h3>Ajouter un Vol</h3>
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

      <form method="post" action="{{ route('vols.store') }}">
.         @csrf
          <div class="form-group">
              <label for="destination">Destination du Vol:</label>
              <input type="text" class="new" name="destination"/>
              <label for="date_depart">Date de Départ:</label>
              <input type="Date" class="new" name="date_depart"/>
              <label for="heure_depart">Heure de Dépat:</label>
              <input type="time" class="new" name="heure_depart"/>
          </div></br>
          <div class="form-group">
              <label for="code_vol">Code du Vol:</label>
              <input type="text" class="new" name="code_vol"/>
          </div>
          <!-- <div class="form-group">
              <label for="marque">Date de Départ:</label>
              <input type="Date" class="form-control" name="marque"/>
          </div>
          <div class="form-group">
              <label for="marque">Heure de Dépat:</label>
              <input type="time" class="form-control" name="marque"/>
          </div> -->
          <div class="card uper">
  <div class="card-header">
    Classe_A
  </div>

          <div class="form-group">
              <label for="nombre_classA">Nombre de personne:</label>
              <input type="number" class="new" name="nombre_classA"/>
              <label for="prix_classA">Prix_Class_A :</label>
              <input type="number" class="new" name="prix_classA"/>
          </div></br>
  <div class="card-header">
    Classe_B
  </div>
  <div class="form-group">
              <label for="nombre_classB">Nombre de personne:</label>
              <input type="number" class="new" name="nombre_classB"/>
              <label for="prix_classB">Prix_Class_B :</label>
              <input type="number" class="new" name="prix_classB"/>
          </div></br>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection