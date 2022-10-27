@extends('layouts.admin')

@section('main-content')
<div class="card">
  <div class="card-header">Evenments Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Description : {{ $evenments->description }}</h5>
        <p class="card-text">Date début : {{ $evenments->date_deb }}</p>
        <p class="card-text">Duree : {{ $evenments->duree }}</p>


    </div>
      
    </hr>
  
  </div>
</div>