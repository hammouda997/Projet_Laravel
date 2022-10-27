@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Stuffs Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $stuffs->nom }}</h5>
        <p class="card-text">Prenom : {{ $stuffs->prenom }}</p>
        <p class="card-text">Cin: {{ $stuffs->cin }}</p>


    </div>
      
    </hr>
  
  </div>
</div>