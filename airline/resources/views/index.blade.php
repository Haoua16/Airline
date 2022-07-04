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
    color:black;
  }

  h3{
    text-align: center;
    margin-top: -60px;
    text-transform: uppercase;
  }
  .uper{
    background-color: white;
    /* background-image: url("{{ URL('img/avion1.jpg') }}"); */
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-bordered table-hover" style="margin-top: 30px; color:white">

    <thead>
        <tr>
          <td>ID</td>
          <td>Destination</td>
          <td>Code_vol</td>
          <td>Date_Depart</td>
          <td>Heure_Depart</td>
          <td>Nombre_ClassA</td>
          <td>Prix_ClassA</td>
          <td>Nombre_ClassB</td>
          <td>Prix_ClassB</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($vols as $vols)
        <tr>
            <td>{{$vols->id}}</td>
            <td>{{$vols->destination}}</td>
            <td>{{$vols->code_vol}}</td>
            <td>{{$vols->date_depart}}</td>
            <td>{{$vols->heure_depart}}</td>
            <td>{{$vols->nombre_classA}}</td>
            <td>{{$vols->prix_classA}}</td>
            <td>{{$vols->nombre_classB}}</td>
            <td>{{$vols->prix_classB}}</td>
            <td><a href="{{ route('vols.edit', $vols->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('vols.destroy', $vols->id)}}" method="post">
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

