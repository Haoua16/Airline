<!-- index.blade.php -->

@extends('layout')

@section('content')

<link href="{{ asset ('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="{{ asset ('css/offcanvas.css')}}" rel="stylesheet">

<style>
  .uper {
    margin-top: 40px;
  }

  .thead {
    font-weight: bold;
    text-align: center;
    background-color: black;
    cursor: pointer;
  }

  .thead:hover {
    color:white;
  }

  h3{
    text-align: center;
    margin-top: -60px;
    text-transform: uppercase;
  }
  .uper{
    background-color: white;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Sexe</td>
          <td>Class</td>
          <td>Vols_id</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($reservation as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->nom}}</td>
            <td>{{$reservation->prenom}}</td>
            <td>{{$reservation->sexe}}</td>
            <td>{{$reservation->class}}</td>
            <td>{{$reservation->vols_id}}</td>
            <td><a href="{{ route('reservation.edit', $reservation->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('reservation.destroy', $reservation->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

