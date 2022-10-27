@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">etablissements Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $etablissements->nom }}</h5>
        <p class="card-text">Adresse : {{ $etablissements->adresse }}</p>

    </div>
      
    </hr>
  
  </div>
</div>