@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Clubs Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom Club : {{ $clubs->nomClub }}</h5>
        <p class="card-text">Adresse : {{ $clubs->adresse }}</p>
        <p class="card-text">Nombre Participant: {{ $clubs->nbrpart }}</p>

    </div>
      
    </hr>
  
  </div>
</div>