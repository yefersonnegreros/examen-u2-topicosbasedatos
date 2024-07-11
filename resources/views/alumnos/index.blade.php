@extends('layouts.master')

@section('content')
<div class="container mt-5 p-5">
    <h1 class="mb-4 p-2">Lista de Alumnos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombres</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($alumnos as $alumno)
                <tr>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}">{{ $alumno->nombre }}</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="1">No hay alumnos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
        {{ $alumnos->links('pagination::bootstrap-5') }} 
    </div>
</div>
@endsection