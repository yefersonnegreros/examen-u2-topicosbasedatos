@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')

<div class="container-fluid background-image d-flex align-items-center justify-content-center" >
    <div class="text-white text-center shadow p-3" style="background-color: rgba(30, 147, 173, 0.5);">
        <h1 class="display-1">Bienvenido a Colegio Perú</h1>
        <p class="lead">Tu camino al éxito profesional</p>
    </div>
</div>

@endsection