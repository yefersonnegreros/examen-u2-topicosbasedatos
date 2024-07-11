<?php
namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAlumnoRequest;
use Carbon\Carbon;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::paginate(4); 
        return view('alumnos.index', compact('alumnos'));
    }
    
    public function create(){
        return view('alumnos.create');
    }

    public function store(CreateAlumnoRequest $request)
    {
        $camposValidados = $request->validated();

        $camposValidados['promedio'] = ($camposValidados['nota_1'] + $camposValidados['nota_2']) / 2;
        $camposValidados['condicion'] = $camposValidados['promedio'] >= 11 ? 'Aprobado' : 'Desaprobado';
        $camposValidados['fecha_reg'] = Carbon::now('America/Lima');;

        Alumno::create($camposValidados);

        return redirect()->route('alumnos.index')
                        ->with('success', 'Alumno creado exitosamente.');
    }
    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
    }

}
