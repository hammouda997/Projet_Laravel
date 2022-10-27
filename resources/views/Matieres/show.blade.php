@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Matiere Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Code Mariere : {{ $matieres->codeM }}</h5>
        <p class="card-text">Nom Mariere : {{ $matieres->nom }}</p>
        <p class="card-text">Coefficient : {{ $matieres->coff }}</p>
        <p class="card-text">Evaluation : {{ $matieres->evaluation }}</p>

    </div>
      
    </hr>
  
  </div>
</div>