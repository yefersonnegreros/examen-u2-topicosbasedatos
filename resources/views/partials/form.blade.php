@csrf
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
        @error('nombre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="curso" class="form-label">Curso:</label>
        <input type="text" id="curso" name="curso" class="form-control @error('curso') is-invalid @enderror" value="{{ old('curso') }}">
        @error('curso')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="nota_1" class="form-label">Nota 1:</label>
        <input type="number" step="0.01" id="nota_1" name="nota_1" class="form-control @error('nota_1') is-invalid @enderror" value="{{ old('nota_1') }}">
        @error('nota_1')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="nota_2" class="form-label">Nota 2:</label>
        <input type="number" step="0.01" id="nota_2" name="nota_2" class="form-control @error('nota_2') is-invalid @enderror" value="{{ old('nota_2') }}">
        @error('nota_2')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="pie-tarjeta text-center">
    <div>
        <a href="{{ route('inicio') }}" class="btn btn-secondary">Volver a inicio</a>
    </div>
    <div>
        <button class="btn btn-primary">{{$btnText}}</button>
    </div>
</div>
