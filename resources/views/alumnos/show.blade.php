@extends('layouts.master')

@section('content')
<div class="container mt-5 p-5">
    <h1>Detalles del Alumno</h1>
    <div class="card">
        <div class="card-header">
            <b>Nombre:</b> {{ $alumno->nombre }}
        </div>
        <div class="card-body">
            <p><strong>Curso:</strong> {{ $alumno->curso }}</p>
            <p><strong>Nota 1:</strong> {{ $alumno->nota_1 }}</p>
            <p><strong>Nota 2:</strong> {{ $alumno->nota_2 }}</p>
            <p><strong>Promedio:</strong> {{ $alumno->promedio }}</p>
            <p><strong>Condición:</strong> {{ $alumno->condicion }}</p>
            <p><strong>Fecha de Registro:</strong> {{ $alumno->fecha_reg }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
