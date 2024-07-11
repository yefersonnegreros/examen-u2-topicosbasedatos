<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-envelope-fill"></i> colegioperu@nbc.com</li>
                    <li><i class="bi bi-telephone-fill"></i> +51 98747478</li>
                    <li><i class="bi bi-geo-alt-fill"></i> Calle Nikola Tesla 369, Trujillo, Perú</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Enlaces</h5>
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a class="nav-link {{ setActivo('inicio') }}" href="{{ route('inicio') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActivo('alumnos.create') }}" href="{{ route('alumnos.create') }}">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActivo('alumnos.index') }}" href="{{ route('alumnos.index') }}">Listado</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Redes Sociales</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-facebook"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        

    </div>
    <div class="text-center p-3 bg-dark text-white">
        © 2024 Derechos Reservados:
        <a href="{{ route('inicio') }}" class="text-white">colegioperu.com</a>
    </div>
</footer>