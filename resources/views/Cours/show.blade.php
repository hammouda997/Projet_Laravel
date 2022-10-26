@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Cours Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Code Cour : {{ $cours->code }}</h5>

        <h5 class="card-title">Nom Cour : {{ $cours->nom }}</h5>
        <p class="card-text">Durée : {{ $cours->duree }}</p>
        <p class="card-text">File: {{ $cours->file }}</p>

    </div>
      
    </hr>
  
  </div>
</div>